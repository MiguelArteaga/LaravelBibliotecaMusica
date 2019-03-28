<?php

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

//Route::get('/', function () {
//    return view('buscador');
//});


//Route::get('/buscador/{$nombre}','buscador@buscarArtista');

Route::get('/','artistasController@index');
Route::get('/insertarArtista','artistasController@store');
Route::post('/artistas','artistasController@create');