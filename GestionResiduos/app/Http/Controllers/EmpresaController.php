<?php

namespace App\Http\Controllers;

use App\Models\Empresa;
use Illuminate\Http\Request;

class EmpresaController extends Controller
{
    public function index()
    {
        $empresas = Empresa::all();
        return view('empresas.index', compact('empresas'));
    }

    public function create()
    {
        return view('empresas.create');
    }

    public function store(Request $request)
    {
        $empresa = new Empresa();
        $empresa->nombre = $request->nombre;
        $empresa->ubicacion = $request->ubicacion;
        $empresa->sector = $request->sector;
        $empresa->save();
        return redirect()->route('empresas.index');
    }

    public function show($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresas.show', compact('empresa'));
    }

    public function edit($id)
    {
        $empresa = Empresa::findOrFail($id);
        return view('empresas.edit', compact('empresa'));
    }

    public function update(Request $request, $id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->nombre = $request->nombre;
        $empresa->ubicacion = $request->ubicacion;
        $empresa->sector = $request->sector;
        $empresa->save();
        return redirect()->route('empresas.index');
    }

    public function destroy($id)
    {
        $empresa = Empresa::findOrFail($id);
        $empresa->delete();
        return redirect()->route('empresas.index');
    }
}
