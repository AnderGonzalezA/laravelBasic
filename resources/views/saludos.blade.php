<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>

  </head>
  <body>
    <?php
    foreach ($idiomas as $idioma) {
      echo($idioma["saludo"] . " " . $nombre . " " . $apellido . "!<br><br>");
    }
    ?>
  </body>
</html>
