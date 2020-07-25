<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('verified');

    }

   
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', ['roles' =>$roles]);
    }

    public function create()
    {
        //
    }

  
    public function store(Request $request)
    {
        $role = new Role;
        $role->nombre = request('nombre');

        $role->save();

        return redirect('roles');
    }

 
    public function show($id)
    {
        //
    }

  
    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
