<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
  </head>
  <body>
    <?php
    $num = 4;

    echo "<table border='1'>";
    echo "<thead>";
    echo "<th>$num</th><th>x</th><th>n</th>=<th>r</th>";
    echo "<thead>";
    echo "<tbody>";
    for ($i=0; $i <= 10; $i++) {
      $res = $num * $i;
      echo "<tr><td>$num</td><td>x</td><td>$i</td><td>=</td><td>$res</td></tr>";
    }
    echo "<tbody>";
    echo "</table>";
    ?>
  </body>
</html>
