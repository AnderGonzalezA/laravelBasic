<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    Kaixo <?php
    if (!isset($apellido)){
        echo($nombre);
    }else{
      echo($nombre . " " . $apellido);
    }?>!
  </body>
</html>
