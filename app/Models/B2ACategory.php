<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class B2ACategory extends Model
{
    use HasFactory; 

    protected $fillable = [
        'question',
        'question_type', 
        'image',
        'option_a',
        'option_b',
        'option_c',
        'option_d',
        'answer'
    ];
}
