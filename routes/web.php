<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome'); // Esta es la ruta por defecto, puedes modificarla
});

// Ruta para mostrar el formulario de registro
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('register');

// Ruta para procesar el envío del formulario de registro
Route::post('/register', [AuthController::class, 'register']);

// Ruta para procesar la suscripción al boletín
Route::post('/subscribe', [NewsletterController::class, 'subscribe'])->name('subscribe');

// Opcional: Ruta para mostrar la página de suscripción al boletín
Route::get('/newsletter/subscribe', function () {
    return view('newsletter.subscribe');
})->name('newsletter.show');

// Aquí puedes agregar más rutas para tu aplicación