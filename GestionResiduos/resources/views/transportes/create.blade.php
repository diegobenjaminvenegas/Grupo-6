@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Agregar Transporte</h1>
        <form action="{{ route('transportes.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="empresa_transporte">Empresa de Transporte</label>
                <input type="text" class="form-control" id="empresa_transporte" name="empresa_transporte" required>
            </div>
            <div class="form-group">
                <label for="fecha_transporte">Fecha de Transporte</label>
                <input type="date" class="form-control" id="fecha_transporte" name="fecha_transporte" required>
            </div>
            <button type="submit" class="btn btn-success">Guardar</button>
        </form>
    </div>
@endsection
