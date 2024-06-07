@extends('layouts.welcome_layout')

<!-- Section de inicio -->
<section class="inicio-section">
    <div class="text-center">
        <img src="images/logo.png" alt="Logo Grande" class="logo">
        <h1 style="color: white; " class="titulo">AGRO S.M.S</h1>
        <p class="slogan">"Programando éxito, cosechando innovación"</p>
        <!-- Botón Flotante -->
        <a href="{{url('/biblioteca')}}" class="floating-search-btn">
        <i class="fas fa-search"></i> Buscar Enfermedades y Plagas de Plantas</a>
    </div>
</section>


