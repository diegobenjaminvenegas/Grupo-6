@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Empresa</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">{{ $empresa->nombre }}</h5>
                <p class="card-text"><strong>Ubicación:</strong> {{ $empresa->ubicacion }}</p>
                <p class="card-text"><strong>Sector:</strong> {{ $empresa->sector }}</p>
                <a href="{{ route('empresas.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
