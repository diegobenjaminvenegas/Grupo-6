@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalle de Usuario</h1>
        <div class="card">
            <div class="card-header">
                {{ $usuario->nombre }}
            </div>
            <div class="card-body">
                <h5 class="card-title">Email: {{ $usuario->email }}</h5>
                <p class="card-text">Rol: {{ $usuario->rol }}</p>
                <a href="{{ route('usuarios.index') }}" class="btn btn-primary">Volver a la lista</a>
            </div>
        </div>
    </div>
@endsection
