@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Reporte</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Reporte #{{ $reporte->id }}</h5>
                <p class="card-text"><strong>Fecha de Generación:</strong> {{ $reporte->fecha_generacion }}</p>
                <p class="card-text"><strong>Empresa:</strong> {{ $reporte->empresa->nombre }}</p>
                <a href="{{ route('reportes.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
