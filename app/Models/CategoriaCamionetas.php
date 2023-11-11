<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoriaCamionetas extends Model
{
    use HasFactory; 

    protected $fillable = [
        'pregunta',
        'tipo_pregunta', 
        'imagen',
        'opcion_a',
        'opcion_b',
        'opcion_c',
        'opcion_d',
        'respueta'
    ];
}
