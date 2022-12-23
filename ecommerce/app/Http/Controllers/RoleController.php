<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::latest()->get();
        return view('backend.roles.index',[
            'roles'=> $roles
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.roles.create');
    }


    public function show(Role $role)
    {
        // dd($role);
        // return view('backend.roles.show',[
        //     'role'=>$role
        // ]);

        // $users = User::where('role_id',$role->id)->get();
        $users = $role->users;
        // dd($users);
         return view('backend.roles.show',compact('users'));
        
    }
}
