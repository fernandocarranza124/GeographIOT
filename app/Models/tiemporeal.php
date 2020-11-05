<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tiemporeal extends Model
{
    use HasFactory;
    protected $table="tiemporeal";
    
    protected $fillable = [
        'latitud', 'longitud',
    ];
}
