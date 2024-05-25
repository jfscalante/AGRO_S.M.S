@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <!-- Contenido Principal -->
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-primary text-white text-center">
                    <h3 class="mb-0">{{ __('Panel de Control') }}</h3>
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success custom-alert" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="alert alert-info custom-alert text-center" role="alert">
                        {{ __('¡Estás conectado!') }}
                    </div>
                </div>
            </div>

            <!-- Acciones Rápidas -->
            <div class="card shadow-sm mb-4">
                <div class="card-header bg-secondary text-white text-center">
                    <h4 class="mb-0">{{ __('Acciones Rápidas') }}</h4>
                </div>
                <div class="card-body">
                    <div class="row justify-content-center text-center">
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('plants.index') }}" class="btn btn-outline-primary btn-lg w-100">
                                <i class="fas fa-seedling fa-2x mb-2"></i>
                                <br>
                                {{ __('Gestionar Plantas') }}
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('plants.create') }}" class="btn btn-outline-success btn-lg w-100">
                                <i class="fas fa-plus fa-2x mb-2"></i>
                                <br>
                                {{ __('Añadir Nueva Planta') }}
                            </a>
                        </div>
                        <div class="col-lg-4 mb-3">
                            <a href="{{ route('config.index') }}" class="btn btn-outline-info btn-lg w-100">
                                <i class="fas fa-cogs fa-2x mb-2"></i>
                                <br>
                                {{ __('Configuración') }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            

        </div>
    </div>
</div>
@endsection
