@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Empresas</h1>
        <a href="{{ route('empresas.create') }}" class="btn btn-primary">Agregar Empresa</a>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Ubicación</th>
                    <th>Sector</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($empresas as $empresa)
                    <tr>
                        <td>{{ $empresa->id }}</td>
                        <td>{{ $empresa->nombre }}</td>
                        <td>{{ $empresa->ubicacion }}</td>
                        <td>{{ $empresa->sector }}</td>
                        <td>
                            <a href="{{ route('empresas.show', $empresa->id) }}" class="btn btn-info">Ver</a>
                            <a href="{{ route('empresas.edit', $empresa->id) }}" class="btn btn-warning">Editar</a>
                            <form action="{{ route('empresas.destroy', $empresa->id) }}" method="POST" style="display:inline-block;">
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
