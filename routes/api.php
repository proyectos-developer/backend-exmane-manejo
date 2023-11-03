<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

//Ruta para registrarse
Route::post('/register',[AuthController::class,'register']);

//Ruta para iniciar sesión
Route::post('/login', [AuthController::class, 'login']);

// Ruta para enviar email de reseteo contraseña
Route::get('/recover-password', [AuthController::class, 'formularioRecuperarContrasenia'])->name('recover-password');

// Función que se ejecuta al enviar el formulario y que enviará el email al usuario
Route::post('/send-recover-password', [AuthController::class, 'enviarRecuperarContrasenia'])->name('send-recover-password');

// Ruta para modificar contraseña
Route::get('/reset-password/{token}', [AuthController::class, 'formularioActualizacion'])->name('reset-password');

// Ruta para actualizar contraseña
Route::post('/update-password', [AuthController::class, 'actualizarContrasenia'])->name('update-password');


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
