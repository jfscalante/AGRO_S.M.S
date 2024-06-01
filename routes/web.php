<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PlantController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

Route::get('/buscar', [SearchController::class, 'search'])->name('search');
// Ruta para el buscador
Route::get('/search', [PlantController::class, 'search'])->name('plants.search');
Route::get('/search', [SearchController::class, 'search'])->name('search');

// Ruta de bienvenida
Route::get('/', function () {
    return view('welcome');
});

// Ruta para la página de contáctanos
Route::get('/contactanos', function () {
    return view('contactanos');
});

// Ruta para manejar el envío del formulario de contacto
Route::post('/enviar-contacto', [ContactController::class, 'enviarContacto']);

// Ruta protegida para la página principal
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');

// Rutas para las plantas
Route::middleware('auth')->group(function () {

    // Ruta de configuracion
    Route::get('/configuracion', [ConfigController::class, 'index'])->name('config.index');
    Route::post('/configuracion', [ConfigController::class, 'update'])->name('config.update');
    // Rutas de registro protegida para el usuario
    Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
    Route::post('/register', [UserController::class, 'register']);
    // Ruta protegida del dashboard de plantas
    Route::get('/plants', [PlantController::class, 'index'])->name('plants.index');
    Route::get('/plants/create', [PlantController::class, 'create'])->name('plants.create');
    Route::post('/plants', [PlantController::class, 'store'])->name('plants.store');
    Route::get('/plants/{id}', [PlantController::class, 'show'])->name('plants.show');
    Route::get('/plants/{id}/edit', [PlantController::class, 'edit'])->name('plants.edit');
    Route::put('/plants/{id}', [PlantController::class, 'update'])->name('plants.update');
    Route::delete('/plants/{id}', [PlantController::class, 'destroy'])->name('plants.destroy');
    Route::post('/filter', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
    Route::get('/plants/filterByDisease', [PlantController::class, 'filterByDisease'])->name('plants.filterByDisease');
    Route::get('/filter', [PlantController::class, 'showFilterForm'])->name('filter.form');
    Route::get('/plants/search', [PlantController::class, 'search'])->name('plants.search');
});

// Rutas para la autenticación de usuarios
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::post('/logout', [UserController::class, 'logout'])->name('logout');

// Autenticación de Laravel
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
