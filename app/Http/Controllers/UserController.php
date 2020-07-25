<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\UserFormRequest;
use App\Http\Requests\UserEditFormRequest;
use App\User;
use App\Role;
use App\Area;

class UserController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('verified');
    }

        public function index()
    {
        $users = User::all();
        return view('usuarios.index', ['users' => $users]);

    }

    public function create()
    {
        $roles = Role::all();
        $areas = Area::all();
        return view('usuarios.create', ['roles'=>$roles], ['areas' => $areas]);
    }


    public function store(UserFormRequest $request)
    {
        $usuario = new User();
        $usuario->name = request('name');
        $usuario->email = request('email');
        $usuario->password = bcrypt(request('password'));
        if ($request->hasFile('imagen')) {
            $file = $request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $usuario->imagen = $file->getClientOriginalName();
        }
        $usuario->save();

        $usuario->asignar($request->get('rol'));
        $usuario->asignarArea($request->get('area'));

        return redirect('/usuarios');
    }


    public function show($id)
    {
        return view('usuarios.show', ['user'=> User::findOrFail($id)]);
    }


    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        $areas = Area::all();
        return view('usuarios.edit', ['user'=> $user, 'roles' => $roles, 'areas' => $areas]);
    }


    public function update(UserEditFormRequest $request, $id)
    {
        $this->validate(request(), ['email' => ['required', 'email', 'max:255', 'unique:users,email,' . $id]]);
        $usuario = User::findOrFail($id);
        $usuario->name = $request->get('name');
        $usuario->email = $request->get('email');
        if ($request->hasFile('imagen')) {
            $file = $request->imagen;
            $file->move(public_path() . '/imagenes', $file->getClientOriginalName());
            $usuario->imagen = $file->getClientOriginalName();
        }
        $pass = $request->get('password');
        if ($pass != null) {
            $usuario->password = bcrypt($request->get('password'));
        } else {
            unset($usuario->password);
        }


        
        $role = $usuario->roles;
        if (count($role) > 0) {
            $role_id = $role[0]->id;
            User::find($id)->roles()->updateExistingPivot($role_id, ['role_id' => $request->get('rol')]);

        }else{
            $usuario->asignar($request->get('rol'));
        }


        $area = $usuario->areas;
        if (count($area) > 0) {
            $area_id = $area[0]->id;

        }
        User::find($id)->areas()->updateExistingPivot($area_id, ['area_id' => $request->get('area')]);

        $usuario->update();
        return redirect('/usuarios');
        }


    public function destroy($id)
    {
        $usuario = User::findOrFail($id);
        $usuario->delete();

        return redirect('/usuarios');
    }
}
