@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles del Almacén</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Almacén #{{ $almacen->id }}</h5>
                <p class="card-text"><strong>Capacidad Máxima:</strong> {{ $almacen->capacidad_maxima }}</p>
                <a href="{{ route('almacenes.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
