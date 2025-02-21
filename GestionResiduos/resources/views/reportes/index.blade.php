@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Reportes</h1>
        <a href="{{ route('reportes.create') }}" class="btn btn-primary">Agregar Reporte</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Fecha de Generación</th>
                    <th>Empresa</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($reportes as $reporte)
                    <tr>
                        <td>{{ $reporte->id }}</td>
                        <td>{{ $reporte->fecha_generacion }}</td>
                        <td>{{ $reporte->empresa->nombre }}</td>
                        <td>
                            <a href="{{ route('reportes.show', $reporte->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('reportes.edit', $reporte->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('reportes.destroy', $reporte->id) }}" method="POST" style="display:inline-block;">
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
