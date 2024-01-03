<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Password;

use App\Http\Controllers\B2ACategoryController;
use App\Http\Controllers\B2BCategoryController;
use App\Http\Controllers\A2ACategoryController;
use App\Http\Controllers\A3ACategoryController;
use App\Http\Controllers\A3BCategoryController;
use App\Http\Controllers\DrivingSchoolController;
use App\Http\Controllers\ClinicController;
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

//Ruta para obtener datos usuario
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Ruta para actualizar datos usuario
Route::get('/user/{id}', [AuthController::class, 'update_user'])->name('user.update_user');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria uno
Route::get('/b2a_category', [B2ACategoryController::class, 'get_questions'])->name('question.get_questions');
Route::post('/b2a_category/store', [B2ACategoryController::class, 'new_question'])->name('question.new_question');
Route::get('/b2a_category/{id}', [B2ACategoryController::class, 'get_question'])->name('question.get_question');
Route::get('/b2a_category/update/{id}', [B2ACategoryController::class, 'update_question'])->name('question.update_question');
Route::delete('/b2a_category/delete/{id}', [B2ACategoryController::class, 'delete_question'])->name('question.delete_question');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria dos
Route::get('/b2b_category', [B2BCategoryController::class, 'get_questions'])->name('question.get_questions');
Route::post('/b2b_category/store', [B2BCategoryController::class, 'new_question'])->name('question.new_question');
Route::get('/b2b_category/{id}', [B2BCategoryController::class, 'get_question'])->name('question.get_question');
Route::get('/b2b_category/update/{id}', [B2BCategoryController::class, 'update_question'])->name('question.update_question');
Route::delete('/b2b_category/delete/{id}', [B2BCategoryController::class, 'delete_question'])->name('question.delete_question');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria tres
Route::get('/a2a_category', [A2ACategoryController::class, 'get_questions'])->name('question.get_questions');
Route::post('/a2a_category/store', [A2ACategoryController::class, 'new_question'])->name('question.new_question');
Route::get('/a2a_category/{id}', [A2ACategoryController::class, 'get_question'])->name('question.get_question');
Route::get('/a2a_category/update/{id}', [A2ACategoryController::class, 'update_question'])->name('question.update_question');
Route::delete('/a2a_category/delete/{id}', [A2ACategoryController::class, 'delete_question'])->name('question.delete_question');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria cuatro
Route::get('/a3a_category', [A3ACategoryController::class, 'get_questions'])->name('question.get_questions');
Route::post('/a3a_category/store', [A3ACategoryController::class, 'new_question'])->name('question.new_question');
Route::get('/a3a_category/{id}', [A3ACategoryController::class, 'get_question'])->name('question.get_question');
Route::get('/a3a_category/update/{id}', [A3ACategoryController::class, 'update_question'])->name('question.update_question');
Route::delete('/a3a_category/delete/{id}', [A3ACategoryController::class, 'delete_question'])->name('question.delete_question');

//Ruta para obtener preguntas, guardar nueva pregunta, obtener una pregunta, actualizar pregunta, eliminar pregunta en cuestionario categoria cinco
Route::get('/a3b_category', [A3BCategoryController::class, 'get_questions'])->name('question.get_questions');
Route::post('/a3b_category/store', [A3BCategoryController::class, 'new_question'])->name('question.new_question');
Route::get('/a3b_category/{id}', [A3BCategoryController::class, 'get_question'])->name('question.get_question');
Route::get('/a3b_category/update/{id}', [A3BCategoryController::class, 'update_question'])->name('question.update_question');
Route::delete('/a3b_category/delete/{id}', [A3BCategoryController::class, 'delete_question'])->name('question.delete_question');

/**Ruta para guardar, actualizar y obtener lista de clinicas para exámen médico */
Route::get('/clinics', [ClinicController::class, 'get_clinics'])->name('clinic.get_clinics');
Route::post('/clinic/store', [ClinicController::class, 'new_clinic'])->name('clinic.new_clinic');
Route::get('/clinic/update/{id}', [ClinicController::class, 'update_clinic'])->name('clinic.update_clinic');
Route::get('/clinics/search/{search}', [ClinicController::class, 'search_clinic'])->name('clinic.search_clinic');

/**Ruta para guardar, actualizar y obtener lista de clinicas para escuelas de manejo */
Route::get('/driving_school', [DrivingSchoolController::class, 'get_driving_schools'])->name('driving_school.get_driving_schools');
Route::post('/driving_school/store', [DrivingSchoolController::class, 'new_driving_school'])->name('driving_school.new_driving_school');
Route::get('/driving_school/update/{id}', [DrivingSchoolController::class, 'update_driving_school'])->name('driving_school.update_driving_school');
Route::get('/driving_school/search/{search}', [DrivingSchoolController::class, 'search_driving_school'])->name('driving_school.search_driving_school');