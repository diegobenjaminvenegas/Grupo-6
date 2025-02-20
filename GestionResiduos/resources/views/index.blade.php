@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido al Sistema de Gestión de Residuos Industriales</h1>
        <p class="lead">Gestiona eficientemente los residuos generados por tu empresa.</p>
        <hr class="my-4">
        <p>Utiliza el menú de navegación para acceder a las diferentes secciones del sistema.</p>
        <a class="btn btn-primary btn-lg" href="{{ route('empresas.index') }}" role="button">Ver Empresas</a>
    </div>
@endsection
