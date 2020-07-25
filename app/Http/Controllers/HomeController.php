<?php

namespace App\Http\Controllers;

use App\Reporte;
use App\User;
use App\Trabajos;
use App\Solicitud;
use Illuminate\Http\Request;
use Http;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
    	$reporte= Reporte::all();
        $trabajos= Trabajos::all();
		$solicitudes= Solicitud::all();

        return view('home', ['reporte' => $reporte, 'trabajos' => $trabajos, 'solicitudes' => $solicitudes]);
    }
}
