<?php

namespace App\Http\Controllers;

use App\Trabajos;
use Illuminate\Http\Request;

class TrabajosApiController extends Controller
{
    public function index()
    {
        $trabajos = Trabajos::all();
        return response()->json($trabajos);
    }



    public function show(Request $request)
    {
        $trabajos = Trabajos::findOrFail($request->id);
        return $trabajos;
    }
}
