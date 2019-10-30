<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{

  function saludo(){
    return view('saludo');
  }

  function saludoConNombre($nombre){
    return view('saludoConNombre',['nombre' => $nombre]);
  }

  function saludoConNombreColor($nombre,$color='00FF00'){
    return view('saludoConNombreColor',['nombre' => $nombre,'color' => $color]);
  }

}
