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

  function formularioGet(){
    return view('formularioGet');
  }

  function saludoGet(Request $request){
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    return view('saludoConNombre',['nombre' => $nombre,'apellido' => $apellido]);
  }

  function formularioPost(){
    return view('formularioPost');
  }

  function saludoPost(Request $request){
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');

    $idiomasString = file_get_contents("js/saludos.json");
    $idiomasArray = json_decode($idiomasString,true);

    return view('saludos',['nombre' => $nombre,'apellido' => $apellido, 'idiomas' => $idiomasArray]);
  }
}
