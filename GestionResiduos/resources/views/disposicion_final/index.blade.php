@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Disposición Final</h1>
        <a href="{{ route('disposicion_final.create') }}" class="btn btn-primary">Agregar Disposición</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Método</th>
                    <th>Fecha de Disposición</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($disposiciones as $disposicion)
                    <tr>
                        <td>{{ $disposicion->id }}</td>
                        <td>{{ $disposicion->metodo }}</td>
                        <td>{{ $disposicion->fecha_disposicion }}</td>
                        <td>
                            <a href="{{ route('disposicion_final.show', $disposicion->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('disposicion_final.edit', $disposicion->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('disposicion_final.destroy', $disposicion->id) }}" method="POST" style="display:inline-block;">
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
