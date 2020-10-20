<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {return "home";});
Route::get('/hola', 'puntos_de_reciclajeController@agregapuntos');
Route::get('/hola2', 'recolectoresController@creacion');

Route::post('/adios', 'puntos_de_reciclajeController@enlistado');
Route::post('/adios2', 'recolectoresController@enlistado2');

Route::get('/editar/{id}', 'puntos_de_reciclajeController@MuestraEdicion');
Route::post('/editar/guardaEdicion', 'puntos_de_reciclajeController@guardaEdicion');

Route::get('/editar2/{id}', 'recolectoresController@MuestraEdicion');
Route::post('/editar2/guardaEdicion', 'recolectoresController@guardaEdicion');

Route::get('/detalleReco', 'puntos_de_reciclajeController@agregapuntos2');
Route::post('/detalleReco2/{id}', 'puntos_de_reciclajeController@agregapuntos3');

