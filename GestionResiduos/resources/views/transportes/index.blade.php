@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Transportes</h1>
        <a href="{{ route('transportes.create') }}" class="btn btn-primary">Agregar Transporte</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Empresa de Transporte</th>
                    <th>Fecha de Transporte</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($transportes as $transporte)
                    <tr>
                        <td>{{ $transporte->id }}</td>
                        <td>{{ $transporte->empresa_transporte }}</td>
                        <td>{{ $transporte->fecha_transporte }}</td>
                        <td>
                            <a href="{{ route('transportes.show', $transporte->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('transportes.edit', $transporte->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('transportes.destroy', $transporte->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
