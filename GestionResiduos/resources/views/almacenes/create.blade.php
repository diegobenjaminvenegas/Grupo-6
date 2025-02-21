@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Almacén</h1>
        <form action="{{ route('almacenes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="capacidad_maxima">Capacidad Máxima</label>
                <input type="number" class="form-control" id="capacidad_maxima" name="capacidad_maxima" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
