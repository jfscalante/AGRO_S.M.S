@extends('layouts.welcome_layout')

@section('content')
<div class="container mt-5">
    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <h1>Contáctanos</h1>
    <p>Si tienes alguna pregunta, no dudes en contactarnos usando el siguiente formulario.</p>

    <!-- Imagen con animaciones -->
    <div class="image-container">
        <img src="images/readme.png" alt="Contacto" class="animated-image">
    </div>

    <form action="/enviar-contacto" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group">
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <!-- aqui nuevo boton animado -->
        <button class="btn">
  <div class="wrapper">
    <p class="text">Enviar</p>

    <div class="flower flower1">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
    <div class="flower flower2">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
    <div class="flower flower3">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
    <div class="flower flower4">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
    <div class="flower flower5">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
    <div class="flower flower6">
      <div class="petal one"></div>
      <div class="petal two"></div>
      <div class="petal three"></div>
      <div class="petal four"></div>
    </div>
  </div>
</button>

        <!-- aqui termina el boton -->
    </form>
</div>

<style>
    body {
        background-image: linear-gradient(rgba(0, 0, 0, 0.82), rgba(0, 0, 0, 0.691)), url('images/fondo.jpg');
        background-size: cover;
        font-family: 'Arial', sans-serif;
        color: #333;
        margin: 0;
        padding: 0;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .container {
        background: #fff;
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    h1 {
        font-size: 2.5rem;
        color: rgb(19, 142, 91);
        margin-bottom: 1rem;
    }

    .form-group {
        margin-bottom: 1.5rem;
    }

    label {
        font-weight: bold;
        color: #555;
    }

    .form-control {
        border: 1px solid #ddd;
        border-radius: 4px;
        padding: 0.5rem;
        width: 100%;
        transition: border-color 0.3s;
    }

    .form-control:focus {
        border-color: #007bff;
        outline: none;
        box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
    }
    /* aqui nuevo boton animado */
    .btn {
  height: 4em;
  width: 12em;
  display: flex;
  align-items: center;
  justify-content: center;
  background: transparent;
  border: 0px solid black;
  cursor: pointer;
}

.wrapper {
  height: 2em;
  width: 8em;
  position: relative;
  background: transparent;
  display: flex;
  justify-content: center;
  align-items: center;
}

.text {
  font-size: 17px;
  z-index: 1;
  color: #000;
  padding: 4px 12px;
  border-radius: 4px;
  background: rgba(255, 255, 255, 0.7);
  transition: all 0.5s ease;
}

.flower {
  display: grid;
  grid-template-columns: 1em 1em;
  position: absolute;
  transition: grid-template-columns 0.8s ease;
}

.flower1 {
  top: -12px;
  left: -13px;
  transform: rotate(5deg);
}

.flower2 {
  bottom: -5px;
  left: 8px;
  transform: rotate(35deg);
}

.flower3 {
  bottom: -15px;
  transform: rotate(0deg);
}

.flower4 {
  top: -14px;
  transform: rotate(15deg);
}

.flower5 {
  right: 11px;
  top: -3px;
  transform: rotate(25deg);
}

.flower6 {
  right: -15px;
  bottom: -15px;
  transform: rotate(30deg);
}

.petal {
  height: 1em;
  width: 1em;
  border-radius: 40% 70% / 7% 90%;
  background: linear-gradient(rgb(19, 142, 91), rgb(148, 223, 187));
  border: 0.5px solid rgb(148, 223, 187);
  z-index: 0;
  transition: width 0.8s ease, height 0.8s ease;
}

.two {
  transform: rotate(90deg);
}

.three {
  transform: rotate(270deg);
}

.four {
  transform: rotate(180deg);
}

.btn:hover .petal {
  background: linear-gradient(rgb(0, 145, 82), rgb(0, 221, 125));
  border: 0.5px solid rgb(0, 221, 125);
}

.btn:hover .flower {
  grid-template-columns: 1.5em 1.5em;
}

.btn:hover .flower .petal {
  width: 1.5em;
  height: 1.5em;
}

.btn:hover .text {
  background: rgba(255, 255, 255, 0.4);
}

.btn:hover div.flower1 {
  animation: 15s linear 0s normal none infinite running flower1;
}

@keyframes flower1 {
  0% {
    transform: rotate(5deg);
  }

  100% {
    transform: rotate(365deg);
  }
}

.btn:hover div.flower2 {
  animation: 13s linear 1s normal none infinite running flower2;
}

@keyframes flower2 {
  0% {
    transform: rotate(35deg);
  }

  100% {
    transform: rotate(-325deg);
  }
}

.btn:hover div.flower3 {
  animation: 16s linear 1s normal none infinite running flower3;
}

@keyframes flower3 {
  0% {
    transform: rotate(0deg);
  }

  100% {
    transform: rotate(360deg);
  }
}

.btn:hover div.flower4 {
  animation: 17s linear 1s normal none infinite running flower4;
}

@keyframes flower4 {
  0% {
    transform: rotate(15deg);
  }

  100% {
    transform: rotate(375deg);
  }
}

.btn:hover div.flower5 {
  animation: 20s linear 1s normal none infinite running flower5;
}

@keyframes flower5 {
  0% {
    transform: rotate(25deg);
  }

  100% {
    transform: rotate(-335deg);
  }
}

.btn:hover div.flower6 {
  animation: 15s linear 1s normal none infinite running flower6;
}

@keyframes flower6 {
  0% {
    transform: rotate(30deg);
  }

  100% {
    transform: rotate(390deg);
  }
}


    /* aqui termina el boton */

 /* .button {
  all: unset;
  display: flex;
  align-items: center;
  position: relative;
  padding: 0.1em 2em;
  border: rgb(19, 142, 91) solid 0.15em;
  border-radius: 0.25em;
  color: rgb(19, 142, 91);
  font-size: 1.5em;
  font-weight: bold;
  cursor: pointer;
  overflow: hidden;
  transition: border 300ms, color 300ms;
  user-select: none;
}

.button p {
  z-index: 1;
  text-align: center;
  margin-top: 12px;
}

.button:hover {
  color: #212121;
}

.button:active {
  border-color: teal;
}

.button::after, .button::before {
  content: "";
  position: absolute;
  width: 9em;
  aspect-ratio: 1;
  background: rgb(19, 142, 91);
  opacity: 50%;
  border-radius: 50%;
  transition: transform 500ms, background 300ms;
}

.button::before {
  left: 0;
  transform: translateX(-8em);
}

.button::after {
  right: 0;
  transform: translateX(8em);
}

.button:hover:before {
  transform: translateX(-1em);
}

.button:hover:after {
  transform: translateX(1em);
}

.button:active:before,
.button:active:after {
  background: teal;
} */

    /* .btn-primary {
        background: rgb(19, 142, 91);
        border: none;
        padding: 0.75rem 1.5rem;
        font-size: 1rem;
        border-radius: 4px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .btn-primary:hover {
        background: rgb(12, 91, 58);

    } */

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
        padding: 1rem;
        margin-bottom: 1rem;
    }

    /* Estilos y animaciones para la imagen */
    .image-container {
        text-align: center;
        margin-bottom: 2rem;
    }

    .animated-image {
        width: 100%;
        max-width: 400px;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        animation: spin 4s infinite linear, bounce 2s infinite alternate;
    }

    .animated-image:hover {
        transform: scale(1.05) rotate(10deg);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .animated-image:active {
        transform: scale(0.95) rotate(-10deg);
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    }

    @keyframes spin {
        from { transform: rotate(0deg); }
        to { transform: rotate(360deg); }
    }

    @keyframes bounce {
        from { transform: translateY(0); }
        to { transform: translateY(-20px); }
    }
</style>
@endsection
