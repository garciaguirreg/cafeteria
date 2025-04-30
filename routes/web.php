<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\PageController;

// Rutas existentes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AuthController::class, 'register']);
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');
Route::get('/newsletter/subscribe', function () {
    return view('newsletter.subscribe');
})->name('newsletter.show');

// Rutas para tus otras páginas
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/crear_cuenta', [PageController::class, 'crearCuenta'])->name('crear_cuenta');
Route::get('/novedades', [PageController::class, 'novedades'])->name('novedades');
Route::get('/contacto', [PageController::class, 'contacto'])->name('contacto');

// Otras rutas que puedas tener...