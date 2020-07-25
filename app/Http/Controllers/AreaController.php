<?php

namespace App\Http\Controllers;

use App\Area;
use Illuminate\Http\Request;

class AreaController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
                $this->middleware('verified');

    }

    public function index()
    {
        $areas = Area::all();
        return view('areas.index', ['areas' =>$areas]);
    }

    public function store(Request $request)
    {
        $area = new Area;
        $area->nombre = request('nombre');

        $area->save();

        return redirect('areas');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
