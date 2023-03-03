<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\View\View;
use Spatie\Permission\Models\Role;


class UserController extends Controller
{
    public function create(): View
    {

            return view('users.createOrEdit');

    }

    public function index()
    {

            return view('users.index', [
                'users' => User::paginate(10),
            ]);

    }

    public function edit(Request $request)
    {
        $user = User::find($request->id);

        return view('users.createOrEdit', [
            'user' => $user,
        ]);
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

            return redirect('/users')->with('message', 'Se ha creado un nuevo usuario con exito!');


    }

    public function update(Request $request, $id)
    {

            $user = User::findOrFail($id);
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

            return redirect('/users')->with('message', 'Se ha actualizado el perfil con !');
    }


    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect('/users')->with('message', 'Se ha eliminado el perfil exitosamente!');
    }
}
