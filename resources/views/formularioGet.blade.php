<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('saludoGet')}}" method="get">
      @csrf
      <label>Nombre</label><input type="text" name="nombre">
      <label>Apellido</label><input type="text" name="apellido">
      <input type="submit" name="" value="Enviar">
    </form>
  </body>
</html>
