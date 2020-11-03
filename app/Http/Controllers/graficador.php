<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;
use App\Http\Controllers\Controller;
class graficador extends Controller
{
    public function cuatroEsquinas()
    {
    	$coord=Casa::latest()->first();
    	return $coord;
    }
    public function insertaDatos()
    {	

    	return view('formulario');
    }
    public function guardaDatos(Request $request)
    {

    	$coord=new Casa();
    	$coord->esq1_latitud=($request->latUno);
    	$coord->esq1_longitud=($request->lonUno);

    	$coord->esq2_latitud=($request->latDos);
    	$coord->esq2_longitud=($request->lonDos);

    	$coord->esq3_latitud=($request->latTres);
    	$coord->esq3_longitud=($request->lonTres);

    	$coord->esq4_latitud=($request->latCuatro);
    	$coord->esq4_longitud=($request->lonCuatro);

    	$coord->save();
    	return redirect('/');
    }
}
