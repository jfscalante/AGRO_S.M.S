@extends('layouts.app')

@section('content')
<style>
 body {
    background-color: #e0e0e0;
    font-family: Arial, sans-serif;
  }

  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
  }

  .card {
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 400px; /* Limitando el ancho del formulario */
    margin: auto;
  }

  .card-header {
    background-color: #4CAF50;
    color: white;
    text-align: center;
    font-size: 1.5rem;
    padding: 1rem;
    border-top-left-radius: 8px;
    border-top-right-radius: 8px;
  }

  .card-body {
    padding: 2rem;
    background-color: white;
  }

  .form-control {
    border: 1px solid #ccc;
    border-radius: 4px;
    padding: 0.5rem;
    margin-bottom: 1rem; /* Ajuste para separación entre campos */
    width: 100%;
  }

  .form-check {
    margin-bottom: 1rem; /* Ajuste para separación entre checkbox y otros elementos */
  }

  .btn-primary {
    background-color: #4CAF50;
    border: none;
    padding: 10px 10px;
    border-radius: 5px;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
    width: 100%; /* Botón ocupa todo el ancho */
  }

  .btn-primary:hover {
    background-color: #45a049;
  }

  .btn-link {
    color: #4CAF50;
    text-decoration: none;
  }

  .btn-link:hover {
    text-decoration: underline;
  }

  .invalid-feedback {
    color: red;
    font-size: 0.875rem;
  }
</style>

<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Iniciar sesión') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="mb-3">
                    <label for="email" class="form-label">{{ __('Dirección de correo electrónico') }}</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label">{{ __('Contraseña') }}</label>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="mb-3 form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">
                        {{ __('Recordarme') }}
                    </label>
                </div>

                <div class="mb-0">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Iniciar sesión') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('¿Olvidaste tu contraseña?') }}
                        </a>
                    @endif
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
