<?php

namespace App\Http\Controllers;

use App\Models\Reporte;
use App\Models\Empresa;
use Illuminate\Http\Request;

class ReporteController extends Controller
{
    public function index()
    {
        $reportes = Reporte::with('empresa')->get();
        return view('reportes.index', compact('reportes'));
    }

    public function create()
    {
        $empresas = Empresa::all();
        return view('reportes.create', compact('empresas'));
    }

    public function store(Request $request)
    {
        $reporte = new Reporte();
        $reporte->fecha_generacion = $request->fecha_generacion;
        $reporte->empresa_id = $request->empresa_id;
        $reporte->save();
        return redirect()->route('reportes.index');
    }

    public function show($id)
    {
        $reporte = Reporte::with('empresa')->findOrFail($id);
        return view('reportes.show', compact('reporte'));
    }

    public function edit($id)
    {
        $reporte = Reporte::findOrFail($id);
        $empresas = Empresa::all();
        return view('reportes.edit', compact('reporte', 'empresas'));
    }

    public function update(Request $request, $id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->fecha_generacion = $request->fecha_generacion;
        $reporte->empresa_id = $request->empresa_id;
        $reporte->save();
        return redirect()->route('reportes.index');
    }

    public function destroy($id)
    {
        $reporte = Reporte::findOrFail($id);
        $reporte->delete();
        return redirect()->route('reportes.index');
    }
}
