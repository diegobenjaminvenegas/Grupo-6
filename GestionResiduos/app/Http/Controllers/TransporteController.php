<?php

namespace App\Http\Controllers;

use App\Models\Transporte;
use Illuminate\Http\Request;

class TransporteController extends Controller
{
    public function index()
    {
        $transportes = Transporte::all();
        return view('transportes.index', compact('transportes'));
    }

    public function create()
    {
        return view('transportes.create');
    }

    public function store(Request $request)
    {
        $transporte = new Transporte();
        $transporte->empresa_transporte = $request->empresa_transporte;
        $transporte->fecha_transporte = $request->fecha_transporte;
        $transporte->save();
        return redirect()->route('transportes.index');
    }

    public function show($id)
    {
        $transporte = Transporte::findOrFail($id);
        return view('transportes.show', compact('transporte'));
    }

    public function edit($id)
    {
        $transporte = Transporte::findOrFail($id);
        return view('transportes.edit', compact('transporte'));
    }

    public function update(Request $request, $id)
    {
        $transporte = Transporte::findOrFail($id);
        $transporte->empresa_transporte = $request->empresa_transporte;
        $transporte->fecha_transporte = $request->fecha_transporte;
        $transporte->save();
        return redirect()->route('transportes.index');
    }

    public function destroy($id)
    {
        $transporte = Transporte::findOrFail($id);
        $transporte->delete();
        return redirect()->route('transportes.index');
    }
}
