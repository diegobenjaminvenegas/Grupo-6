@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Residuo</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Tipo: {{ $residuo->tipo }}</h5>
                <p class="card-text"><strong>Cantidad:</strong> {{ $residuo->cantidad }}</p>
                <p class="card-text"><strong>Fecha de Generación:</strong> {{ $residuo->fecha_generacion }}</p>
                <p class="card-text"><strong>Estado:</strong> {{ $residuo->estado }}</p>
                <p class="card-text"><strong>Empresa:</strong> {{ $residuo->empresa->nombre }}</p>
                <a href="{{ route('residuos.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
