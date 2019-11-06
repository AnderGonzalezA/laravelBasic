<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('mostrarValidado')}}" method="post">
      @csrf
      <label>Nombre: </label><input type="text" name="nombre" value="">
      <label>Apellido: </label><input type="text" name="apellido" value="">
      <label>Email: </label><input type="email" name="email" value="">
      <label>Telefono: </label><input type="string" name="telefono" value="">
      <input type="submit" name="" value="Validar">
    </form>
  </body>
</html>
