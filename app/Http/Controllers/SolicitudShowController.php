<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudShowController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $solicitud = Solicitud::all();
        return view('solicituds.index', compact('solicitud'));
    }

    public function destroy($id)
    {
        $solicitud = Solicitud::findOrFail($id);
        $solicitud->delete();

        return redirect('/solicituds');
    }
}
