<!-- resources/views/plants/details.blade.php -->
@extends('layouts.welcome_layout')

@section('content')
<style>
    /* Contenedor principal */
    .plant-detail-container {
        margin-top: 20px;
    }

    /* Estilo para la tarjeta principal */
    .plant-card {
        border: none;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        overflow: hidden;
    }

    /* Estilo para la imagen de la planta */
    .plant-card img {
        width: 100%;
        height: auto;
    }

    /* Estilo para el encabezado de la tarjeta */
    .plant-card-header {
        background-color: #f8f9fa;
        padding: 20px;
        text-align: center;
    }

    /* Estilo para el cuerpo de la tarjeta */
    .plant-card-body {
        padding: 20px;
    }

    /* Estilo para las secciones de resumen y detalles */
    .plant-summary, .plant-details {
        margin-top: 20px;
    }

    /* Estilo para el texto de las secciones */
    .section-title {
        font-size: 1.25em;
        font-weight: bold;
        margin-bottom: 10px;
    }
</style>

<div class="container plant-detail-container">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card plant-card">
                <div class="card-header plant-card-header">
                    <h2>{{ $plant->name }}</h2>
                    <p><em>{{ $plant->disease_name }}</em></p>
                </div>
                <div class="card-body plant-card-body">
                    @if ($plant->image)
                        <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}" class="img-fluid">
                    @else
                        <img src="{{ asset('images/default-plant.jpg') }}" alt="{{ $plant->name }}" class="img-fluid">
                    @endif

                    <div class="plant-summary">
                        <h3 class="section-title">Resumen</h3>
                        <p>{{ $plant->description }}</p>
                    </div>

                    <!-- Aquí puedes agregar más detalles según sea necesario -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
