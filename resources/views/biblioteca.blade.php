@extends('layouts.welcome_layout')

<div class="content">
    <img src="images/banner_biblioteca.png" alt="">
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
    }

    .plant-card:hover {
        transform: scale(1.02);
    }

    .plant-card img {
        max-width: 100%;
        border-radius: 5px;
    }

    .plant-card h3 {
        margin-top: 10px;
        margin-bottom: 10px;
        color: #23262e;
    }

    .plant-card p {
        margin: 5px 0;
        color: #23262e;
    }

</style>

<div class="container">
    <h1>Bienvenido</h1>

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
        <h2>Resultados de la búsqueda para "{{ $query }}"</h2>
        @if($plants->isEmpty())
            <p>No se encontraron resultados.</p>
        @else
            <div class="row">
                @foreach($plants as $plant)
                    <div class="col-md-4">
                        <div class="plant-card" data-toggle="modal" data-target="#plantModal" data-plant="{{ htmlspecialchars(json_encode($plant), ENT_QUOTES, 'UTF-8') }}">
                            @if ($plant->image)
                                <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}">
                            @else
                                <img src="images/default-plant.jpg" alt="{{ $plant->name }}">
                            @endif
                            <h3>{{ $plant->name }}</h3>
                            <p><strong>Nombre de la Enfermedad:</strong> {{ $plant->disease_name }}</p>
                            <p><strong>Descripción:</strong> {{ Str::limit($plant->description, 100) }}</p>
                        </div>
                    </div>
                @endforeach
            </div>
        @endif
    @endif
</div>

<!-- Modal para mostrar los detalles de la planta -->
<div class="modal fade" id="plantModal" tabindex="-1" role="dialog" aria-labelledby="plantModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="plantModalLabel">Detalles de la Planta</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- Contenido del modal se llenará dinámicamente -->
                <div id="plant-details"></div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
    $('#plantModal').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget);
        var plant = button.data('plant');
        var modal = $(this);
        var content = `
            <img src="images/${plant.image}" class="img-fluid" alt="${plant.name}">
            <h3>${plant.name}</h3>
            <p><strong>Nombre de la Enfermedad:</strong> ${plant.disease_name}</p>
            <p><strong>Descripción:</strong> ${plant.description}</p>
            <p><strong>Tratamiento Químico:</strong> ${plant.chemical_treatment}</p>
            <p><strong>Cantidad de Tratamiento:</strong> ${plant.treatment_quantity}</p>
            <p><strong>Medidas Preventivas:</strong> ${plant.preventive_measures}</p>
        `;
        modal.find('#plant-details').html(content);
    });
</script>
@endsection
