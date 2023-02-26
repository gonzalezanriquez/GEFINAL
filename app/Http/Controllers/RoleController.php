<?php

namespace App\Http\Controllers;


use App\Models\Image;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\throwException;

class RoleController extends Controller
{
    public function index(Request $request)
    {

        $user = User::find($request->id);
        $roles = Role::all();
        $userRoles = $user->roles()->get();

        return view('roles.index', [
            'user' => $user,
            'roles' => $roles,
            'userRoles' => $userRoles
        ]);

    }

    public function store(Request $request)
    {
        
        $user = User::find($request->userId);
        $roles = $user->roles()->get();
        $checkRole = $roles->where('id', $request->roles);

        if ($checkRole->isNotEmpty() === true)
        {

            return back()->withErrors(['msg' => 'Éste usuario ya posee el rol seleccionado!']);
        }
        else
        {
            $user->roles()->attach($request->roles);
        }

        return back();
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->userId);
        $user->roles()->detach($request->roleId);

        return back();
    }
}
