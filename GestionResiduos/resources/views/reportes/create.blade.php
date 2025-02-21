@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Reporte</h1>
        <form action="{{ route('reportes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="fecha_generacion">Fecha de Generación</label>
                <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion" required>
            </div>
            <div class="form-group">
                <label for="empresa_id">Empresa</label>
                <select class="form-control" id="empresa_id" name="empresa_id" required>
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
