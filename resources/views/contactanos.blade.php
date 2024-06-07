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

    <form action="/enviar-contacto" method="POST" id="contactForm">
        @csrf
        <div class="form-group input-group">
            <i class="fas fa-user"></i>
            <label for="name">Nombre</label>
            <input type="text" class="form-control" id="name" name="name" required>
        </div>
        <div class="form-group input-group">
            <i class="fas fa-envelope"></i>
            <label for="email">Correo Electrónico</label>
            <input type="email" class="form-control" id="email" name="email" required>
        </div>
        <div class="form-group input-group">
            <i class="fas fa-comment"></i>
            <label for="message">Mensaje</label>
            <textarea class="form-control" id="message" name="message" rows="5" required></textarea>
        </div>
        <!-- Botón animado -->
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
        <!-- Aquí termina el botón -->

        <div id="formMessage" class="form-message"></div>
    </form>

    <!-- Mapa de ubicación -->
    <div class="map-container">
        <h2>Nuestra Ubicación</h2>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3153.195604730993!2d144.9556511155041!3d-37.81230184267412!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642af0f11fd81%3A0xf0727db378d7df57!2sFederation%20Square!5e0!3m2!1sen!2sau!4v1617761845275!5m2!1sen!2sau" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
    </div>
</div>

<style>
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css');

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

    .input-group {
        position: relative;
    }

    .input-group i {
        position: absolute;
        left: 10px;
        top: 50%;
        transform: translateY(-50%);
        color: #aaa;
    }

    .input-group input,
    .input-group textarea {
        padding-left: 30px;
    }

    .alert-success {
        background-color: #d4edda;
        color: #155724;
        border: 1px solid #c3e6cb;
        border-radius: 4px;
        padding: 1rem;
        margin-bottom: 1rem;
    }

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

    .map-container {
        margin-top: 2rem;
    }

    .map-container h2 {
        font-size: 1.5rem;
        margin-bottom: 1rem;
    }
</style>

<script>
    document.getElementById('contactForm').addEventListener('submit', function(event) {
        event.preventDefault();
        
        // Validación simple
        const name = document.getElementById('name').value;
        const email = document.getElementById('email').value;
        const message = document.getElementById('message').value;

        if(name === '' || email === '' || message === '') {
            document.getElementById('formMessage').innerHTML = 'Todos los campos son obligatorios.';
            document.getElementById('formMessage').classList.add('alert', 'alert-danger');
            return;
        }

        // Enviar formulario
        this.submit();
    });
</script>
@endsection
