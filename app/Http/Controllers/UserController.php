<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class UserController extends Controller
{
    public function create(): View
    {
        $user = auth()->user();

        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Administrador/a') === true) {
            return view('notAuthorized');
        } else {
            return view('users.createOrUpdate');
        }
    }

    public function index()
    {
        $user = auth()->user();

        $roles = Role::all();

        $authotizedRole = $user->roles()->get();

        if ($authotizedRole->doesntContain('role_name', 'Administrador/a') === true) {
            return view('notAuthorized');
        } else {
            return view('users.index', [
                'users' => User::paginate(10),
                'roles' => $roles,
            ]);
        }
    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);

        return view('users.createOrUpdate', [
            'id' => $user->id,
            'name' => $user->name,
            'username' => $user->username,
            'email' => $user->email,
        ])->with('user', $user);
    }

    public function store(Request $request)
    {


        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255'],
            'email' => 'required',
            'password' => 'required|confirmed|min:8|max:30',
        ]);


        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password'  =>  Hash::make($request['password']),
            'updated_at'  =>  (new \DateTime())->format('Y-m-d H:i:s'),
        ]);

        return redirect('/users');
    }

    public function update(Request $request, User $user)
    {
        if (!Gate::allows('update-user', $user)) {
            abort(403);
        }

        $userAuth = auth()->user();
        $authotizedRole = $userAuth->roles()->get();

        $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'max:255'],
            'email' => ['required', 'max:255'],
            'password' => 'required|confirmed|min:8|max:30',
        ]);

        $user->name = $request['name'];
        $user->username = $request['username'];
        $user->email = $request['email'];
        $user->password = Hash::make($request['password']);
        $user->updated_at = (new \DateTime())->format('Y-m-d H:i:s');
        $user->save();

        if ($authotizedRole->contains('Administrador/a')) {
            return redirect('/users');
        } else {
            return redirect('/');
        }
        return back();
    }
    public function destroy($id)
    {
        DB::table('users')->delete($id);

        return redirect('/users');
    }
}
