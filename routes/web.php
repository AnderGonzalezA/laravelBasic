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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contacto', function() {
  return view('contacto');
})->name('contacto');

Route::get('/blog/{identificador}', function($identificador){
  return view('blog',['identificador' => $identificador]);
})->name('blog');

Route::get('/blogConNombre/{identificador}/{nombre?}', function($identificador, $nombre='anonimo'){
  //if (is_numeric($identificador) && (preg_match("/^[a-zA-Z]+$/", $nombre) == 1)){
    return view('blogConNombre',['identificador' => $identificador, 'nombre' => $nombre]);
  //}
  //else{
    //return ('Inserta un identificador y un nombre válido');
  //}
})->where(array('identificador'=>'[0-9]+','nombre'=>'[a-zA-Z]+'))->name('blogConNombre');

Route::get('/saludo', 'SaludoController@saludo')->name('saludo');

Route::get('/saludoConNombre/{nombre}', 'SaludoController@saludoConNombre')->name('saludoConNombre');

Route::get('/saludoConNombreColor/{nombre}/{color?}', 'SaludoController@saludoConNombreColor')->name('saludoConNombreColor');

Route::get('/formularioGet', 'SaludoController@formularioGet')->name('formularioGet');

Route::get('/saludoGet', 'SaludoController@saludoGet')->name('saludoGet');

Route::get('/formularioPost', 'SaludoController@formularioPost')->name('formularioPost');

Route::post('/saludoPost', 'SaludoController@saludoPost')->name('saludoPost');

Route::get('/formularioPost2', 'SaludoController@formularioPost2')->name('formularioPost2');

Route::post('/saludoPost2', 'SaludoController@saludoPost2')->name('saludoPost2');

Route::get('/formularioValidado','SaludoController@formularioValidado')->name('formularioValidado');

Route::post('/mostrarValidado','SaludoController@mostrarValidado')->name('mostrarValidado');

Route::get('/formularioValidado2','SaludoController@formularioValidado2')->name('formularioValidado2');

Route::post('/mostrarValidado2','SaludoController@mostrarValidado2')->name('mostrarValidado2');
