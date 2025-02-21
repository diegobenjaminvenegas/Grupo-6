@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Residuo</h1>
        <form action="{{ route('residuos.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" required>
            </div>
            <div class="form-group">
                <label for="fecha_generacion">Fecha de Generación</label>
                <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" required>
            </div>
            <div class="form-group">
                <label for="empresa_id">Empresa</label>
                <select class="form-control" id="empresa_id" name="empresa_id">
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->id }}">{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
