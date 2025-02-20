@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Transporte</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Transporte #{{ $transporte->id }}</h5>
                <p class="card-text"><strong>Empresa de Transporte:</strong> {{ $transporte->empresa_transporte }}</p>
                <p class="card-text"><strong>Fecha de Transporte:</strong> {{ $transporte->fecha_transporte }}</p>
                <a href="{{ route('transportes.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
