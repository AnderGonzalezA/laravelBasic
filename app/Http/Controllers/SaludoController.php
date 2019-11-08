<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactoRequest;

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

  function formularioPost2(){
    return view('mismaVistaJson');
  }

  function saludoPost2(Request $request){
    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');

    $idiomasString = file_get_contents("js/saludos.json");
    $idiomasArray = json_decode($idiomasString,true);

    return view('mismaVistaJson',['nombre' => $nombre, 'apellido' => $apellido, 'idiomas' => $idiomasArray]);
  }

  function formularioValidado(){
    return view('formularioValidado');
  }

  function mostrarValidado(Request $request){
    /*

    $primerNumeroValido = true;
    if (substr($telefono,0,1) !== '6'){
      if (substr($telefono,0,1) !== '7'){
        $primerNumeroValido = false;
      }
    }

    if (!empty($nombre) && !empty($apellido) && !empty($email) && !empty($telefono)){
      if(!is_string($nombre) || preg_match('/[^A-Za-z]/', $nombre) || strlen($nombre)<2 || strlen($nombre)>15){
        return ('Inserta un nombre válido');
      }elseif (!is_string($apellido) || preg_match('/[^A-Za-z]/', $apellido) || strlen($apellido)<2 || strlen($apellido)>15) {
        return ('Inserta un apellido válido');
      }else if(strlen($telefono)!=9 || !preg_match("/^\d+$/", $telefono) || !$primerNumeroValido){
        return ('Inserta un telefono válido' . substr($telefono,0,1));
      }else{
        return view('mostrarValidado',['nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'telefono' => $telefono]);
      }
    }else{
      return('Rellena todos los campos');
    }*/


    $validatedData = $request->validate([
      'nombre' => 'required|min:2|max:15',
      'apellido' => 'required|min:2|max:20',
      'email' => 'required|email',
      'telefono' => ['nullable','regex:/^[6|7|9][0-9]{8}$/']
    ]);

    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $email = $request->input('email');
    $telefono = $request->input('telefono');

    return view('mostrarValidado',['nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'telefono' => $telefono]);
  }

  function formularioValidado2(){
    return view('formularioValidado2');
  }

  function mostrarValidado2(ContactoRequest $request){

    $nombre = $request->input('nombre');
    $apellido = $request->input('apellido');
    $email = $request->input('email');
    $telefono = $request->input('telefono');

    return view('mostrarValidado',['nombre' => $nombre, 'apellido' => $apellido, 'email' => $email, 'telefono' => $telefono]);
  }
}
