<?php

namespace App\Http\Controllers;

use App\Models\DisposicionFinal;
use Illuminate\Http\Request;

class DisposicionFinalController extends Controller
{
    public function index()
    {
        $disposiciones = DisposicionFinal::all();
        return view('disposicion_final.index', compact('disposiciones'));
    }

    public function create()
    {
        return view('disposicion_final.create');
    }

    public function store(Request $request)
    {
        $disposicion = new DisposicionFinal();
        $disposicion->metodo = $request->metodo;
        $disposicion->fecha_disposicion = $request->fecha_disposicion;
        $disposicion->save();
        return redirect()->route('disposicion_final.index');
    }

    public function show($id)
    {
        $disposicion = DisposicionFinal::findOrFail($id);
        return view('disposicion_final.show', compact('disposicion'));
    }

    public function edit($id)
    {
        $disposicion = DisposicionFinal::findOrFail($id);
        return view('disposicion_final.edit', compact('disposicion'));
    }

    public function update(Request $request, $id)
    {
        $disposicion = DisposicionFinal::findOrFail($id);
        $disposicion->metodo = $request->metodo;
        $disposicion->fecha_disposicion = $request->fecha_disposicion;
        $disposicion->save();
        return redirect()->route('disposicion_final.index');
    }

    public function destroy($id)
    {
        $disposicion = DisposicionFinal::findOrFail($id);
        $disposicion->delete();
        return redirect()->route('disposicion_final.index');
    }
}
