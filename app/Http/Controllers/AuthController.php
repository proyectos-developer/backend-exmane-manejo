<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class AuthController extends Controller
{
    public function register(Request $request){
        $post_data = $request->validate([
            'name'=>'required|string',
            'email'=>'required|string|email|unique:users',
            'password'=>'required|min:8'
        ]);
        $user = User::create([
            'name' => $post_data['name'],
            'email' => $post_data['email'],
            'password' => Hash::make($post_data['password']),
        ]);
        $token = $user->createToken('authToken')->plainTextToken;
        return response()->json([
            'access_token' => $token,
            'token_type' => 'Bearer',
        ]);
    }

    public function login(Request $request){
        if (!\Auth::attempt($request->only('email', 'password'))) {
            return response()->json([
                'message' => 'Invalid login details'
            ], 401);
        }
        $user = User::where('email', $request['email'])->firstOrFail();
        $token = $user->createToken('authToken')->plainTextToken;
        return response()->json([
                'access_token' => $token,
                'token_type' => 'Bearer',
        ]);
    }

    public function formularioRecuperarContrasenia()
    {
        return view('auth.recover-password');
    }

    public function enviarRecuperarContrasenia(Request $request)
    {
        // Validación del email
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        // Generamos un token único
        $token = Str::random(64);

        // Eliminamos la anterior reseteo de contraseña sin terminar
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        // Creamos la solicitud de reseteo de contraseña
        DB::table('password_reset_tokens')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        // Enviamos el email de recuperación de contraseña
        Mail::send('email.recuperar-contrasenia', ['token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->subject('Recuperar Contraseña');
        });

        return back()->with('message', 'Te hemos enviado un email con las instrucciones para que recuperes tu contraseña');
    }

    public function formularioActualizacion($token)
    {
        return view('auth.formulario-actualizacion', ['token' => $token]);
    }

    public function actualizarContrasenia(Request $request)
    {
        // Validaciones
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        // Obtenemos el registro que contiene la solicitud de reseteo de contraseña
        $updatePassword = DB::table('password_reset_tokens')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        // Si no existe la solicitud devolvemos un error
        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Token inválido');
        }

        // Actualizamos la contraseña del usuario
        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);


        // Eliminamos la solicitud
        DB::table('password_reset_tokens')->where(['email' => $request->email])->delete();

        // Devolvemos al formulario de login (devolvera un 404 puesto que no existe la ruta)
        return redirect('/login')->with('message', 'Tu contraseña se ha cambiado correctamente');
    }
}
