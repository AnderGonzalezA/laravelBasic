<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form class="" action="{{route('mostrarValidado2')}}" method="post">
      @csrf
      <label>Nombre: </label><input type="text" name="nombre" value="{{old('nombre')}}">
      @if ($errors->has('nombre'))
        {{$errors->first('nombre')}}
      @endif<br>
      <label>Apellido: </label><input type="text" name="apellido" value="{{old('apellido')}}">
      @if ($errors->has('apellido'))
        {{$errors->first('apellido')}}
      @endif<br>
      <label>Email: </label><input type="email" name="email" value="{{old('email')}}">
      @if ($errors->has('email'))
        {{$errors->first('email')}}
      @endif<br>
      <label>Telefono: </label><input type="string" name="telefono" value="{{old('telefono')}}">
      @if ($errors->has('telefono'))
        {{$errors->first('telefono')}}
      @endif<br>
      <label>DNI: </label><input type="string" name="dni" value="{{old('dni')}}">
      @if ($errors->has('dni'))
        {{$errors->first('dni')}}
      @endif<br>
      <input type="submit" name="" value="Validar">
    </form>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif
  </body>
</html>
