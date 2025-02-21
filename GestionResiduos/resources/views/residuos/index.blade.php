@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Residuos</h1>
        <a href="{{ route('residuos.create') }}" class="btn btn-primary">Agregar Residuo</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Cantidad</th>
                    <th>Fecha de Generación</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($residuos as $residuo)
                    <tr>
                        <td>{{ $residuo->id }}</td>
                        <td>{{ $residuo->tipo }}</td>
                        <td>{{ $residuo->cantidad }}</td>
                        <td>{{ $residuo->fecha_generacion }}</td>
                        <td>{{ $residuo->estado }}</td>
                        <td>
                            <a href="{{ route('residuos.show', $residuo->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('residuos.edit', $residuo->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('residuos.destroy', $residuo->id) }}" method="POST" style="display:inline-block;">
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
