@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Editar Transporte</h1>
        <form action="{{ route('transportes.update', $transporte->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="empresa_transporte">Empresa de Transporte</label>
                <input type="text" class="form-control" id="empresa_transporte" name="empresa_transporte" value="{{ $transporte->empresa_transporte }}" required>
            </div>
            <div class="form-group">
                <label for="fecha_transporte">Fecha de Transporte</label>
                <input type="date" class="form-control" id="fecha_transporte" name="fecha_transporte" value="{{ $transporte->fecha_transporte }}" required>
            </div>
            <button type="submit" class="btn btn-success">Actualizar</button>
        </form>
    </div>
@endsection
