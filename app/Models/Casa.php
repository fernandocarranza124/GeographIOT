<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Casa extends Model
{
    use HasFactory;
    protected $table="casa";
    
    protected $fillable = [
        'esq1_longitud','esq1_latitud',
        'esq2_longitud','esq2_latitud',
        'esq3_longitud','esq3_latitud',
        'esq4_longitud','esq4_latitud',
    ];
}
