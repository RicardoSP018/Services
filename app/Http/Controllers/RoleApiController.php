<?php

namespace App\Http\Controllers;

use App\Role;
use Illuminate\Http\Request;

class RoleApiController extends Controller
{
    public function index()
    {
        $role = Role::all();
        return response()->json($role);
    }


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        $role = new Role();
        $role->nombre = $request->nombre;
        $role->save();
    }


    public function show(Request $request)
    {
        $role = Role::findOrFail($request->id);
        return $role;
    }





    public function update(Request $request)
    {
        $role = Role::findOrFail($request->id);

        $role->nombre = $request->nombre;
        $role->save();

        return $role;
    }


    public function destroy(Request $request)
    {
        $role = Role::destroy($request->id);
        return $role;
    }
}
