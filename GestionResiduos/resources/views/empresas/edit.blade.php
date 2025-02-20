@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Empresa</h1>
        <form action="{{ route('empresas.update', $empresa->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $empresa->nombre }}" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" value="{{ $empresa->ubicacion }}" required>
            </div>
            <div class="form-group">
                <label for="sector">Sector</label>
                <input type="text" class="form-control" id="sector" name="sector" value="{{ $empresa->sector }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
