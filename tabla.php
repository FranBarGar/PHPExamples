<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>Tabla de multiplicar</title>
</head>
<body>
  <?php $num = 4; ?>
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
</body>
</html>
