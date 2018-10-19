<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Calculadora</title>
</head>
<body>
    <?php
    $p1 = isset($_GET['p1']) ? trim($_GET['p1']) : "";
    $p2 = isset($_GET['p2']) ? trim($_GET['p2']) : "";
    $op = isset($_GET['op']) ? trim($_GET['op']) : "";
    ?>
    <form class="6" action="" method="get">
        <label for="p1">Primer operando: </label>
        <input id="p1" type="text" name="p1" value="<?= $p1 ?>"><br>
        <label for="p2">Segundo operando: </label>
        <input id="p2" type="text" name="p2" value="<?= $p2 ?>"><br>
        <label for="op">Operacion: </label>
        <input id="op" type="text" name="op" value="<?= $op ?>"><br>
        <input type="submit" value="Send">
    </form>
    <?php
    require './auxiliar.php';
    operar($p1, $p2, $op);
    ?>
</body>
</html>
