<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\User;
use App\Trabajos;
use Illuminate\Http\Request;

class TrabajosController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('verified');

    }



    public function index()
    {
        $trabajos = Trabajos::all();
        $users = User::all();
        return view('trabajos.index', ['trabajos' => $trabajos, 'users' => $users]);
    }

  


    public function create()
    {
        $reportes = Reporte::all();
        $users = User::all();
        return view('trabajos.create', ['reportes'=>$reportes, 'users' => $users])->with(['users' => $users]);;
    }

   


    public function store(Request $request)
    {
        $trabajo = new Trabajos();
        $trabajo->fecha = request('fecha');
        $trabajo->estatus = request('estatus');
        $trabajo->user_id = request('user_id');
        $trabajo->save();
        $trabajo->asignar($request->get('reporte'));
        return redirect('/trabajos');
    }

   


    public function show($id)
    {
        return view('trabajos.show', ['trabajos'=> Trabajos::findOrFail($id)]);
    }

    



    public function edit($id)
    {
        $trabajos = Trabajos::findOrFail($id);
        $reportes = Reporte::all();
        return view('trabajos.edit', ['trabajos'=> $trabajos, 'reportes' => $reportes]);
    }

   



    public function update(Request $request, Trabajos $trabajos)
    {
        //
    }

   


   
    public function destroy($id)
    {
        $trabajos = Trabajos::findOrFail($id);
        $trabajos->delete();

        return redirect('/trabajos');
    }
}
