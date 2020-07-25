<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\User;
use App\Role;
use App\Trabajos;
use App\Solicitud;
use Illuminate\Http\Request;
use Http;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('verified');

    }


    public function index()
    {
    	$reporte= Reporte::all();
        $trabajos= Trabajos::all();
		$solicitudes= Solicitud::all();

        return view('home', ['reporte' => $reporte, 'trabajos' => $trabajos, 'solicitudes' => $solicitudes]);
    }

    public function updateUser(UserEditFormRequest $request, $id)
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
}
