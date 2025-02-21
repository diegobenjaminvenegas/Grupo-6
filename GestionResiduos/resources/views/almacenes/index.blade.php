@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Almacenes</h1>
        <a href="{{ route('almacenes.create') }}" class="btn btn-primary">Agregar Almacén</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Capacidad Máxima</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($almacenes as $almacen)
                    <tr>
                        <td>{{ $almacen->id }}</td>
                        <td>{{ $almacen->capacidad_maxima }}</td>
                        <td>
                            <a href="{{ route('almacenes.show', $almacen->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('almacenes.edit', $almacen->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('almacenes.destroy', $almacen->id) }}" method="POST" style="display:inline-block;">
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
