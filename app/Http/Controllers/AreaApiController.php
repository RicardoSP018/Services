<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaApiController extends Controller
{
    public function index()
    {
        $area = Area::all();
        return response()->json($area);
    }

    public function show(Request $request)
    {
        $area = Area::findOrFail($request->id);
        return $area;
    }

    public function destroy(Request $request)
    {
        $area = Area::destroy($request->id);
        return $area;
    }
}
