<?php

namespace App\Http\Controllers;

use App\Area;
use App\Reporte;
use Http;
use Illuminate\Http\Request;

class ReporteshController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('verified');

    }


    public function index()
    {
        $reporte = Reporte::all();
        $area = Area::all();

        return view('reportes.index', ['reporte' => $reporte, 'area' => $area]);
    }

    public function show($id)
    {
        return view('reportes.show', ['reportes'=> Reporte::findOrFail($id)]);
  }

    public function destroy($id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();

        return redirect('/reportes');
    }
}
