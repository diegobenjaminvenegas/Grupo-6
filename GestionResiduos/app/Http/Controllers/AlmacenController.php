<?php

namespace App\Http\Controllers;

use App\Models\Almacen;
use Illuminate\Http\Request;

class AlmacenController extends Controller
{
    public function index()
    {
        $almacenes = Almacen::all();
        return view('almacenes.index', compact('almacenes'));
    }

    public function create()
    {
        return view('almacenes.create');
    }

    public function store(Request $request)
    {
        $almacen = new Almacen();
        $almacen->capacidad_maxima = $request->capacidad_maxima;
        $almacen->save();
        return redirect()->route('almacenes.index');
    }

    public function show($id)
    {
        $almacen = Almacen::findOrFail($id);
        return view('almacenes.show', compact('almacen'));
    }

    public function edit($id)
    {
        $almacen = Almacen::findOrFail($id);
        return view('almacenes.edit', compact('almacen'));
    }

    public function update(Request $request, $id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->capacidad_maxima = $request->capacidad_maxima;
        $almacen->save();
        return redirect()->route('almacenes.index');
    }

    public function destroy($id)
    {
        $almacen = Almacen::findOrFail($id);
        $almacen->delete();
        return redirect()->route('almacenes.index');
    }
}
