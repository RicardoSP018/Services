<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudController extends Controller
{
    
    public function index()
    {
        $solicitud = Solicitud::all();
        return response()->json($solicitud);
    }

    

    
    public function store(Request $request)
    {
        $solicitud = new Solicitud($request->all());

        $solicitud->save();
<<<<<<< HEAD
        return response()->json($solicitud);
=======
        return response()->json($solicitud)
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
    }

   


    public function show(Request $request)
    {
        $solicitud = Solicitud::findOrFail($request->id);
        $solicitud = User::findOrFail($request->id);
        return $solicitud;
    }

   


    public function edit(Solicitud $solicitud)
    {
        //
    }


<<<<<<< HEAD
=======


>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
    public function update(Request $request, Solicitud $solicitud)
    {
        $solicitud = Solicitud::findOrFail($request->id);

        $solicitud->fecha = $request->fecha;
        $solicitud->descripcion = $request->descripcion;

        $solicitud->save();

        return $solicitud;
    }

 


    public function destroy(Request $request)
    {
        $solicitud = Solicitud::destroy($request->id);
        return $solicitud;
    }
}
