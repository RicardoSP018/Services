<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Role;

class RoleController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
<<<<<<< HEAD
                $this->middleware('verified');

=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
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
