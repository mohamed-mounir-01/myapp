<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
     protected $fillable = [
        'first_name',
        'second_name',
        'email',
        'adress',
        'city',
        'code_postal',
        'service',
        'plan',
    ];
}
