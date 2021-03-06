<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Casa;
use App\Models\Colonia;
use App\Models\tiemporeal;
use App\Http\Controllers\Controller;
class graficador extends Controller
{
    public function parteUno()
    {
    	$coords=collect(['casa' => Casa::all(), 'colonia' => Colonia::all()]);
    	// dd($coords);
    	return $coords;
    }
    public function insertaDatos()
    {	
    	$coordsCasa=Casa::all();
    	$coordsColonia=Colonia::all();
    	return view('formulario', compact('coordsCasa','coordsColonia'));
    }
    public function storeDatosCasa(Request $request)
    {

    	$coord=new Casa();
    	$coord->longitud=abs($request->longitud);
    	$coord->latitud=abs($request->latitud);

    	$coord->save();
    	return redirect('/insertaDatos');
    }
    public function reiniciaBDCasa()
    {
    	Casa::truncate();
    	return redirect('/insertaDatos');
    }


    public function storeDatosColonia(Request $request)
    {

    	$coord=new Colonia();
    	$coord->longitud=abs($request->longitud);
    	$coord->latitud=abs($request->latitud);

    	$coord->save();
    	return redirect('/insertaDatos');
    }
    public function reiniciaBDColonia()
    {
    	Colonia::truncate();
    	return redirect('/insertaDatos');
    }

    public function RaspberryStore($latitud,$longitud)
    {
    	$coordenada=new tiemporeal();
    	$coordenada->latitud=abs($latitud);
    	$coordenada->longitud=abs($longitud);
    	$coordenada->save();
    	return "ok";
    }
    public function consultadatos(){
    	$rows=tiemporeal::all();
    	return $rows;
    }
    public function reiniciarTiempoReal()
    {
    	tiemporeal::truncate();
    	return redirect()->route('index');
    }
    public function ultimaCoord()
    {
    	$coordsCasa=Casa::all();
    	return $coordsCasa;
    }
    public function parteDos()
    {
        $coords=collect(['casa' => Casa::all(), 'raspberry' => tiemporeal::latest()->first()]);
        return $coords;
    }
}
