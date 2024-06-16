@extends('layouts.welcome_layout')

    <!-- Imagen de banner -->
    <div class="content">
        <img src="{{ asset('images/banner_biblioteca.png') }}" alt="Banner Biblioteca">
    </div>
    
@section('content')
<style>
    /* Imagen de banner */
    .content img {
        width: 100%;
        height: auto;
        margin-bottom: 20px;
    }

    /* Estilo para las tarjetas de plantas */
    .plant-card {
        border: 1px solid #ddd;
        border-radius: 5px;
        margin-bottom: 20px;
        padding: 15px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        transition: transform 0.2s;
        color: #23262e;
        background-color: #fff;
    }

    .plant-card:hover {
        transform: scale(1.02);
    }

    .plant-card img {
        max-width: 100%;
        border-radius: 5px;
        height: 200px;
        object-fit: cover;
    }

    .plant-card h3 {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #23262e;
        font-size: 1.25em;
    }

    .plant-card p {
        margin: 5px 0;
        color: #23262e;
    }

    .search-info {
        margin-bottom: 20px;
        font-size: 1.1em;
        color: #555;
    }

    .input-group-append button {
        background-color: #28a745;
        color: white;
    }

    .input-group-append button:hover {
        background-color: #218838;
    }
</style>

<div class="container">



    <h1>Biblioteca de Plantas</h1>

    <!-- Información sobre el buscador -->
    <div class="search-info">
        Utiliza el buscador para encontrar información sobre diferentes plantas y las enfermedades que las afectan. Puedes buscar por el nombre de la planta o por el nombre de la enfermedad.
    </div>

    <!-- Formulario de búsqueda -->
    <form action="{{ route('search') }}" method="GET" class="mb-4">
        <div class="input-group">
            <input type="text" name="query" class="form-control" placeholder="Buscar plantas..." value="{{ request()->input('query') }}">
            <div class="input-group-append">
                <button class="btn btn-primary" type="submit">Buscar</button>
            </div>
        </div>
    </form>

    <!-- Resultados de la búsqueda -->
    @if(isset($plants))
        <h2>{{ isset($query) ? "Resultados de la búsqueda para \"$query\"" : "Todas las Plantas" }}</h2>
        @if($plants->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
            <div class="row">
                @foreach($plants as $plant)
                    <div class="col-md-4">
                        <div class="plant-card">
                            <a href="{{ route('plants.details', $plant->id) }}">
                                @if ($plant->image)
                                    <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}">
                                @else
                                    <img src="{{ asset('images/default-plant.jpg') }}" alt="{{ $plant->name }}">
                                @endif
                                <h3>{{ $plant->name }}</h3>
                                <p><strong>Nombre de la Enfermedad:</strong> {{ $plant->disease_name }}</p>
                                <!-- <p><strong>Descripción:</strong> {{ Str::limit($plant->description, 100) }}</p> -->
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</div>
@endsection
