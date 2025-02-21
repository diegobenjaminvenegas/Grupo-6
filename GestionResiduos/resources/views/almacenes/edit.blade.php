@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Almacén</h1>
        <form action="{{ route('almacenes.update', $almacen->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="capacidad_maxima">Capacidad Máxima</label>
                <input type="number" class="form-control" id="capacidad_maxima" name="capacidad_maxima" value="{{ $almacen->capacidad_maxima }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection