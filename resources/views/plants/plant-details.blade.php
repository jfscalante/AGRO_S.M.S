@extends('layouts.welcome_layout')

@section('content')
<div class="container">
    <h1>{{ $plant->name }}</h1>
    <p><strong>Nombre de la Enfermedad:</strong> {{ $plant->disease_name }}</p>
    <p><strong>Descripción:</strong> {{ $plant->description }}</p>
    @if ($plant->image)
        <div>
            <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}" style="max-width: 100%;">
        </div>
    @endif
    <p><strong>Tratamiento Químico:</strong> {{ $plant->chemical_treatment }}</p>
    <p><strong>Cantidad del Tratamiento:</strong> {{ $plant->treatment_quantity }}</p>
    <p><strong>Medidas Preventivas:</strong> {{ $plant->preventive_measures }}</p>

    <a href="{{ route('plants.index') }}" class="btn btn-secondary">Volver a la Lista</a>
</div>
@endsection
