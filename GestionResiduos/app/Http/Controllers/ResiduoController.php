<?php

namespace App\Http\Controllers;

use App\Models\Residuo;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ResiduoController extends Controller
{
    public function index()
    {
        $residuos = Residuo::with('empresa')->get();
        return view('residuos.index', compact('residuos'));
    }

    public function create()
    {
        $empresas = Empresa::all();
        return view('residuos.create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $residuo = new Residuo();
        $residuo->tipo = $request->tipo;
        $residuo->cantidad = $request->cantidad;
        $residuo->fecha_generacion = $request->fecha_generacion;
        $residuo->estado = $request->estado;
        $residuo->empresa_id = $request->empresa_id;
        $residuo->save();
        return redirect()->route('residuos.index');
    }

    public function show($id)
    {
        $residuo = Residuo::with('empresa')->findOrFail($id);
        return view('residuos.show', compact('residuo'));
    }

    public function edit($id)
    {
        $residuo = Residuo::findOrFail($id);
        $empresas = Empresa::all();
        return view('residuos.edit', compact('residuo', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $residuo = Residuo::findOrFail($id);
        $residuo->tipo = $request->tipo;
        $residuo->cantidad = $request->cantidad;
        $residuo->fecha_generacion = $request->fecha_generacion;
        $residuo->estado = $request->estado;
        $residuo->empresa_id = $request->empresa_id;
        $residuo->save();
        return redirect()->route('residuos.index');
    }

    public function destroy($id)
    {
        $residuo = Residuo::findOrFail($id);
        $residuo->delete();
        return redirect()->route('residuos.index');
    }
}
