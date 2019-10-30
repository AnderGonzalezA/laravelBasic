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

Route::get("/blogConNombre/{identificador}/{nombre?}", function($identificador, $nombre='anonimo'){
  if (is_numeric($identificador) && (preg_match("/^[a-zA-Z]+$/", $nombre) == 1)){
    return view('blogConNombre',['identificador' => $identificador, 'nombre' => $nombre]);
  }else{
    return ('Inserta un identificador y un nombre válido');
  }
})->name('blogConNombre');
