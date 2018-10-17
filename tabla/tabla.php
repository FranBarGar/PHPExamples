<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tabla de multiplicar</title>
</head>
<body>
  <?php
  require './auxiliar.php';
  if (!isset($_GET['num'])) {
    mostrarError("falta el parametro <i>num</i>");
  } else {
    $num = $_GET['num'];
    if (!ctype_digit($num)) {
      mostrarError("se ha pasado algo que no es un numero");
    } else {
      if ($num < 0 || $num > 10) {
        mostrarError("el numero debe estar comprendido entre 0 y 10");
      } else {
        mostrarTabla($num);
      }
    }
  } ?>
</body>
</html>
