<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tabla de multiplicar</title>
</head>
<body>
  <?php
  function mostrarError($err)
  {
    echo "<h3>Error: $err</h3>";
  }

  function mostrarTabla($num)
  {
    // global $num;
    ?>
    <table border='1'>
      <thead>
        <th><?= $num ?></th>
        <th>x</th>
        <th>n</th>
        <th>=</th>
        <th>r</th>
      </thead>
      <tbody>
        <?php for ($i=0; $i <= 10; $i++) { ?>
          <tr>
            <td><?= $num ?></td>
            <td>x</td>
            <td><?= $i ?></td>
            <td>=</td>
            <td><?= $num * $i ?></td>
          </tr>
        <?php } ?>
      </tbody>
    </table>
    <?php
  }

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
