<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\User;
use DB;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;



class UserController extends Controller
{
    public function obtener_usuario($email)
    {
        $usuario = User::where('email', '=', $email)->first();
        return(compact('usuario'));
    }
}
