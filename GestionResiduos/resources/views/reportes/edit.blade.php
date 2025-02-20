@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Reporte</h1>
        <form action="{{ route('reportes.update', $reporte->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="fecha_generacion">Fecha de Generación</label>
                <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion" value="{{ $reporte->fecha_generacion }}" required>
            </div>
            <div class="form-group">
                <label for="empresa_id">Empresa</label>
                <select class="form-control" id="empresa_id" name="empresa_id" required>
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->id }}" {{ $empresa->id == $reporte->empresa_id ? 'selected' : '' }}>{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
