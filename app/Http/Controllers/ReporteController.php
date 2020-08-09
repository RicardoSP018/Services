<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ReporteController extends Controller
{

    public function index()
    {
        $reporte=Reporte::orderBy("created_at","desc")->get();
        return response()->json($reporte, 200);
    }


    public function store(Request $request)
    {
        $reporte = new Reporte($request->all());
        $reporte->nombrePer = $request->nombrePer;
        $reporte->tipoPer = $request->tipoPer;
        $reporte->nombreReporte = $request->nombreReporte;
        $reporte->area = $request->area;
        $reporte->descripcion = $request->descripcion;
        $reporte->fecha = $request->fecha;
        $reporte->save();
        return response()->json($reporte, 200);
<<<<<<< HEAD
=======

>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
    }

        public function show(Request $request)
    {
        $reporte = Reporte::findOrFail($request->id);
        return $reporte;
    }



    public function destroy(Request $request)
    {
        $reporte = Reporte::destroy($request->id);
        return $reporte;
    }
}
