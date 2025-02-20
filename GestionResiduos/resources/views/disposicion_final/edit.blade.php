@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Disposición Final</h1>
        <form action="{{ route('disposicion_final.update', $disposicion->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="metodo">Método</label>
                <input type="text" class="form-control" id="metodo" name="metodo" value="{{ $disposicion->metodo }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_disposicion">Fecha de Disposición</label>
                <input type="date" class="form-control" id="fecha_disposicion" name="fecha_disposicion" value="{{ $disposicion->fecha_disposicion }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
