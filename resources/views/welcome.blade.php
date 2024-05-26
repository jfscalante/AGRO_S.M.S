@extends('layouts.welcome_layout')

<!-- Estilos CSS y Scripts JS -->
<style>

</style>

<!-- Section de inicio -->
<section class="inicio-section">
    <div class="text-center">
        <img src="images/logo.png" alt="Logo Grande" class="logo">
        <h1 style="color: white;">AGRO S.M.S</h1>
        <p class="slogan">"Programando éxito, cosechando innovación"</p>
    </div>
</section>

@section('content')

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
            <table class="table table-striped" id="plants-table">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Nombre de la Enfermedad</th>
                        <th>Descripción</th>
                        <th>Tratamiento Químico</th>
                        <th>Cantidad de Tratamiento</th>
                        <th>Medidas Preventivas</th>
                        <th>Imagen</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($plants as $plant)
                        <tr>
                            <td><a href="#" class="plant-link" data-toggle="modal" data-target="#plantModal" data-plant="{{ htmlspecialchars(json_encode($plant), ENT_QUOTES, 'UTF-8') }}">{{ $plant->name }}</a></td>
                            <td>{{ $plant->disease_name }}</td>
                            <td>{{ $plant->description }}</td>
                            <td>{{ $plant->chemical_treatment }}</td>
                            <td>{{ $plant->treatment_quantity }}</td>
                            <td>{{ $plant->preventive_measures }}</td>
                            <td>
                                @if ($plant->image)
                                    <img src="{{ asset('images/' . $plant->image) }}" alt="{{ $plant->name }}" class="img-thumbnail" style="max-width: 100px;">
                                @else
                                    Sin imagen
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
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
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.11.5/js/dataTables.bootstrap4.min.js"></script>
<script>
    $(document).ready(function() {
        // Inicializar DataTables
        $('#plants-table').DataTable({
            "language": {
                "url": "//cdn.datatables.net/plug-ins/1.11.5/i18n/Spanish.json"
            },
            "order": [[ 0, "desc" ]], // Ordenar por la primera columna (ID) de forma descendente
            "pagingType": "simple_numbers", // Tipo de paginación
            "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "Todos"]], // Opciones de cantidad de registros por página
            "responsive": true // Tabla responsiva
        });

        // Manejar el clic en el enlace de la planta
        $('.plant-link').on('click', function() {
            var plant = $(this).data('plant');
            var plantDetails = `
                <h3>${plant.name}</h3>
                <p><strong>Nombre de la Enfermedad:</strong> ${plant.disease_name}</p>
                <p><strong>Descripción:</strong> ${plant.description}</p>
                <p><strong>Tratamiento Químico:</strong> ${plant.chemical_treatment}</p>
                <p><strong>Cantidad de Tratamiento:</strong> ${plant.treatment_quantity}</p>
                <p><strong>Medidas Preventivas:</strong> ${plant.preventive_measures}</p>
                ${plant.image ? `<img src="/images/${plant.image}" alt="${plant.name}" class="img-fluid">` : 'Sin imagen'}
            `;
            $('#plant-details').html(plantDetails);
        });

        // Toggle del menú de navegación para móviles
        $('.menu-toggle').on('click', function() {
            $('.menu').toggleClass('active');
        });
    });
</script>
@endsection
