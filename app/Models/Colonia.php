<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colonia extends Model
{
    use HasFactory;
    protected $table="colonia";
    
    protected $fillable = [
        'latitud', 'longitud',
    ];
}
