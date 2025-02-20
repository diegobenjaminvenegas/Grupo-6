@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Disposición Final</h1>
        <form action="{{ route('disposicion_final.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="metodo">Método</label>
                <input type="text" class="form-control" id="metodo" name="metodo" required>
            </div>
            <div class="form-group">
                <label for="fecha_disposicion">Fecha de Disposición</label>
                <input type="date" class="form-control" id="fecha_disposicion" name="fecha_disposicion" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
