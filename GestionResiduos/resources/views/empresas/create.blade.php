@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Empresa</h1>
        <form action="{{ route('empresas.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nombre">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="form-group">
                <label for="ubicacion">Ubicación</label>
                <input type="text" class="form-control" id="ubicacion" name="ubicacion" required>
            </div>
            <div class="form-group">
                <label for="sector">Sector</label>
                <input type="text" class="form-control" id="sector" name="sector" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
