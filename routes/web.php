<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\graficador;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('parteUno', 'App\Http\Controllers\graficador@parteUno');

Route::get('insertaDatos', 'App\Http\Controllers\graficador@insertaDatos');
Route::get('reiniciaBDCasa', 'App\Http\Controllers\graficador@reiniciaBDCasa');
Route::post('storeDatosCasa', 'App\Http\Controllers\graficador@storeDatosCasa');

Route::get('reiniciaBDColonia', 'App\Http\Controllers\graficador@reiniciaBDColonia');
Route::post('storeDatosColonia', 'App\Http\Controllers\graficador@storeDatosColonia');

Route::get('consultadatos', 'App\Http\Controllers\graficador@consultadatos');
Route::get('RaspberryStore/{latitud}/{longitud}', 'App\Http\Controllers\graficador@RaspberryStore');


Route::get('ultimaCoord', 'App\Http\Controllers\graficador@ultimaCoord');
Route::get('parteDos', 'App\Http\Controllers\graficador@parteDos');
Route::get('reiniciarTiempoReal', 'App\Http\Controllers\graficador@reiniciarTiempoReal');

