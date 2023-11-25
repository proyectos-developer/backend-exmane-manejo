<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EscuelasManejo extends Model
{
    use HasFactory;

    protected $fillable = [
        'nombre',
        'logo', 
        'costo',
        'telefono',
        'ubicacion'
    ];
}
