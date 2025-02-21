@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Detalles de la Disposición Final</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Disposición Final #{{ $disposicion->id }}</h5>
                <p class="card-text"><strong>Método:</strong> {{ $disposicion->metodo }}</p>
                <p class="card-text"><strong>Fecha de Disposición:</strong> {{ $disposicion->fecha_disposicion }}</p>
                <a href="{{ route('disposicion_final.index') }}" class="btn btn-primary">Volver a la Lista</a>
            </div>
        </div>
    </div>
@endsection
