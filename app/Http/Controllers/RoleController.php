<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(Request $request)
    {



        $user = User::find($request->id);
        $allroles = Role::all()->pluck('name');
        $roles = $user->getRoleNames();

        return view('roles.index', [
            'user' => $user,
            'roles' => $roles,
            'allroles' => $allroles
        ]);

    }

    public function store(Request $request)
    {

        $user = User::find($request->userId);
        $user->assignRole($request->roles);

            return back();
    }

    public function destroy(Request $request)
    {
        $user = User::find($request->userId);
        $user->removeRole($request->role);

        return back();
    }
}
