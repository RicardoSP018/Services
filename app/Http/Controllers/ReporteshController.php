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
<<<<<<< HEAD
                $this->middleware('verified');

=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
    }


    public function index()
    {
        $reporte = Reporte::all();
        $area = Area::all();

        return view('reportes.index', ['reporte' => $reporte, 'area' => $area]);
    }

<<<<<<< HEAD
    public function show($id)
    {
        return view('reportes.show', ['reportes'=> Reporte::findOrFail($id)]);
  }

=======
>>>>>>> 4d6bcb37afdb70ff1d2016991077f42d5eeeb318
    public function destroy($id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();

        return redirect('/reportes');
    }
}
