<!-- resources/views/nosotros.blade.php -->
@extends('layouts.welcome_layout')

@section('content')
<div class="container mt-5">
    <h1>Nosotros</h1>
    <p>Conoce más sobre nosotros y nuestra misión.</p>

    <!-- Imagen con animaciones -->
    <div class="image-container">
        <img src="images/nosotros_image.jpg" alt="Nosotros" class="animated-image">
    </div>

    <p>Somos un equipo dedicado a...</p>

    <!-- Tarjetas del equipo de desarrollo -->
    <div class="team-section">
        <div class="team-card">
            <img src="images/scalante.png" alt="Miembro 1" class="team-image">
            <h3>Fabian Scalante</h3>
            <p>Desarrollador Full Stack</p>
            <p>Experto en Laravel y Vue.js</p>
        </div>
        <div class="team-card">
            <img src="images/fajardo.png" alt="Miembro 2" class="team-image">
            <h3>Miguel Suarez</h3>
            <p>Desarrolladora Frontend</p>
            <p>Especialista en React y CSS</p>
        </div>
        <div class="team-card">
            <img src="images/monroy.png" alt="Miembro 3" class="team-image">
            <h3>Duvan Monroy</h3>
            <p>Desarrollador Backend</p>
            <p>Experto en Node.js y MongoDB</p>
        </div>
    </div>
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
        background: rgba(255, 255, 255, 0.9);
        padding: 2rem;
        border-radius: 8px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        max-width: 800px;
        width: 100%;
        text-align: center;
    }

    h1 {
        font-size: 2.5rem;
        color: #007bff;
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

    .team-section {
        display: flex;
        justify-content: space-around;
        margin-top: 2rem;
    }

    .team-card {
        background: white;
        padding: 1rem;
        border-radius: 8px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 30%;
        transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
    }

    .team-card:hover {
        transform: scale(1.05);
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
    }

    .team-image {
        width: 100%;
        border-radius: 50%;
        margin-bottom: 1rem;
    }

    .team-card h3 {
        margin: 0;
        color: #007bff;
    }

    .team-card p {
        margin: 0.5rem 0;
        color: #555;
    }
</style>
@endsection
