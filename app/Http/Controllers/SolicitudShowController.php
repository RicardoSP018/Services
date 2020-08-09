<?php

namespace App\Http\Controllers;

use App\Solicitud;
use Illuminate\Http\Request;

class SolicitudShowController extends Controller
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
