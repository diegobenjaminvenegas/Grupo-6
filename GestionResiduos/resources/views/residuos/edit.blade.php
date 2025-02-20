@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Residuo</h1>
        <form action="{{ route('residuos.update', $residuo->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="tipo">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $residuo->tipo }}" required>
            </div>
            <div class="form-group">
                <label for="cantidad">Cantidad</label>
                <input type="number" class="form-control" id="cantidad" name="cantidad" value="{{ $residuo->cantidad }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_generacion">Fecha de Generación</label>
                <input type="date" class="form-control" id="fecha_generacion" name="fecha_generacion" value="{{ $residuo->fecha_generacion }}" required>
            </div>
            <div class="form-group">
                <label for="estado">Estado</label>
                <input type="text" class="form-control" id="estado" name="estado" value="{{ $residuo->estado }}" required>
            </div>
            <div class="form-group">
                <label for="empresa_id">Empresa</label>
                <select class="form-control" id="empresa_id" name="empresa_id" required>
                    @foreach($empresas as $empresa)
                        <option value="{{ $empresa->id }}" {{ $empresa->id == $residuo->empresa_id ? 'selected' : '' }}>{{ $empresa->nombre }}</option>
                    @endforeach
                </select>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
