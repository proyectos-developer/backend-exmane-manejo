<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClinicCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'logo', 
        'cost',
        'phone_number',
        'location'
    ];
}
