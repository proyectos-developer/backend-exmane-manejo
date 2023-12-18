<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;

use App\Http\Controllers\CategoriaMotoLinealsController;
use App\Http\Controllers\CategoriaMotoTaxesController;
use App\Http\Controllers\CategoriaCamionesController;
use App\Http\Controllers\CategoriaBusesController;
use App\Http\Controllers\CategoriaCamionetasController;
use App\Http\Controllers\EscuelaManejoController;
use App\Http\Controllers\ClinicasController;
use App\Http\Controllers\ForgetPasswordManager;

/**|--------------------------------------------------------------------------
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
//Route::get('/recover-password', [ForgotPasswordController::class, 'formularioRecuperarContrasenia'])->name('recover-password');
Route::get('/forgot-password', function () {
    return view('auth.passwords.email');
})->middleware('guest')->name('password.request');

Route::post('/forgot-password', function (Request $request) {
    $request->validate(['email' => 'required|email']);
 
    $status = Password::sendResetLink(
        $request->only('email')
    );
 
    return $status === Password::RESET_LINK_SENT
                ? back()->with(['status' => __($status)])
                : back()->withErrors(['email' => __($status)]);
})->middleware('guest')->name('password.email');

// Función que se ejecuta al enviar el formulario y que enviará el email al usuario
Route::post('/send-recover-password', [AuthController::class, 'enviarRecuperarContrasenia'])->name('send-recover-password');

// Ruta para modificar contraseña
Route::get('/reset-password/{token}', [AuthController::class, 'formularioActualizacion'])->name('reset-password');

// Ruta para actualizar contraseña
Route::post('/update-password', [AuthController::class, 'actualizarContrasenia'])->name('update-password');

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria uno
Route::get('/preguntas_categoria_uno', [CategoriaMotoLinealsController::class, 'obtener_preguntas'])->name('pregunta.obtener_preguntas');
Route::post('/preguntas_categoria_uno/store', [CategoriaMotoLinealsController::class, 'crear_pregunta'])->name('pregunta.crear_pregunta');
Route::get('/preguntas_categoria_uno/{id}', [CategoriaMotoLinealsController::class, 'obtener_pregunta'])->name('pregunta.obtener_pregunta');
Route::get('/preguntas_categoria_uno/actualizar/{id}', [CategoriaMotoLinealsController::class, 'actualizar_pregunta'])->name('pregunta.actualizar_pregunta');
Route::delete('/preguntas_categoria_uno/eliminar/{id}', [CategoriaMotoLinealsController::class, 'eliminar_pregunta'])->name('pregunta.eliminar_pregunta');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria dos
Route::get('/preguntas_categoria_dos', [CategoriaMototaxesController::class, 'obtener_preguntas'])->name('pregunta.obtener_preguntas');
Route::post('/preguntas_categoria_dos/store', [CategoriaMototaxesController::class, 'crear_pregunta'])->name('pregunta.crear_pregunta');
Route::get('/preguntas_categoria_dos/{id}', [CategoriaMototaxesController::class, 'obtener_pregunta'])->name('pregunta.obtener_pregunta');
Route::get('/preguntas_categoria_dos/actualizar/{id}', [CategoriaMototaxesController::class, 'actualizar_pregunta'])->name('pregunta.actualizar_pregunta');
Route::delete('/preguntas_categoria_dos/eliminar/{id}', [CategoriaMototaxesController::class, 'eliminar_pregunta'])->name('pregunta.eliminar_pregunta');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria tres
Route::get('/preguntas_categoria_tres', [CategoriaCamionesController::class, 'obtener_preguntas'])->name('pregunta.obtener_preguntas');
Route::post('/preguntas_categoria_tres/store', [CategoriaCamionesController::class, 'crear_pregunta'])->name('pregunta.crear_pregunta');
Route::get('/preguntas_categoria_tres/{id}', [CategoriaCamionesController::class, 'obtener_pregunta'])->name('pregunta.obtener_pregunta');
Route::get('/preguntas_categoria_tres/actualizar/{id}', [CategoriaCamionesController::class, 'actualizar_pregunta'])->name('pregunta.actualizar_pregunta');
Route::delete('/preguntas_categoria_tres/eliminar/{id}', [CategoriaCamionesController::class, 'eliminar_pregunta'])->name('pregunta.eliminar_pregunta');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria cuatro
Route::get('/preguntas_categoria_cuatro', [CategoriaBusesController::class, 'obtener_preguntas'])->name('pregunta.obtener_preguntas');
Route::post('/preguntas_categoria_cuatro/store', [CategoriaBusesController::class, 'crear_pregunta'])->name('pregunta.crear_pregunta');
Route::get('/preguntas_categoria_cuatro/{id}', [CategoriaBusesController::class, 'obtener_pregunta'])->name('pregunta.obtener_pregunta');
Route::get('/preguntas_categoria_cuatro/actualizar/{id}', [CategoriaBusesController::class, 'actualizar_pregunta'])->name('pregunta.actualizar_pregunta');
Route::delete('/preguntas_categoria_cuatro/eliminar/{id}', [CategoriaBusesController::class, 'eliminar_pregunta'])->name('pregunta.eliminar_pregunta');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria cinco
Route::get('/preguntas_categoria_cinco', [CategoriaCamionetasController::class, 'obtener_preguntas'])->name('pregunta.obtener_preguntas');
Route::post('/preguntas_categoria_cinco/store', [CategoriaCamionetasController::class, 'crear_pregunta'])->name('pregunta.crear_pregunta');
Route::get('/preguntas_categoria_cinco/{id}', [CategoriaCamionetasController::class, 'obtener_pregunta'])->name('pregunta.obtener_pregunta');
Route::get('/preguntas_categoria_cinco/actualizar/{id}', [CategoriaCamionetasController::class, 'actualizar_pregunta'])->name('pregunta.actualizar_pregunta');
Route::delete('/preguntas_categoria_cinco/eliminar/{id}', [CategoriaCamionetasController::class, 'eliminar_pregunta'])->name('pregunta.eliminar_pregunta');

/**Ruta para guardar, actualizar y obtener lista de clinicas para exámen médico */
Route::get('/clinicas', [ClinicasController::class, 'obtener_clinicas'])->name('clinica.obtener_clinicas');
Route::post('/clinica/store', [ClinicasController::class, 'crear_clinica'])->name('clinica.crear_clinica');
Route::get('/clinica/actualizar/{id}', [ClinicasController::class, 'actualizar_clinica'])->name('clinica.actualizar_clinica');
Route::get('/clinicas/search/{search}', [ClinicasController::class, 'buscar_por_distrito'])->name('clinica.buscar_por_distrito');

/**Ruta para guardar, actualizar y obtener lista de clinicas para escuelas de manejo */
Route::get('/escuelas_manejo', [EscuelaManejoController::class, 'obtener_escuelas_manejo'])->name('escuelas.obtener_escuelas_manejo');
Route::post('/escuelas_manejo/store', [EscuelaManejoController::class, 'crear_escuela_manejo'])->name('escuelas.crear_escuela_manejo');
Route::get('/escuelas_manejo/actualizar/{id}', [EscuelaManejoController::class, 'actualizar_escuela_manejo'])->name('escuelas.actualizar_escuela_manejo');
Route::get('/escuelas_manejo/search/{search}', [EscuelaManejoController::class, 'buscar_por_distrito'])->name('escuelas.buscar_por_distrito');

/**Ruta para guardar respuesta */
Route::post('/respuesta/store', [RespuestasUsuariosController::class, 'crear_respuesta'])->name('respuesta.crear_respuesta');
Route::get('/respuesta/{id}', [RespuestasUsuariosController::class, 'obtener_respuesta'])->name('respuesta.obtener_respuesta');
Route::get('/respuesta/actualizar/{id}/{respuesta_usuario}/{correcta_usuario}', [RespuestasUsuariosController::class, 'actualizar_respuestas'])->name('respuesta.actualizar_respuestas');