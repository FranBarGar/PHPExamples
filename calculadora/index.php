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
        <select name="op">
            <option value="+" <?= $op=="+" ? 'selected' : '' ?>>+</option>
            <option value="-" <?= $op=="-" ? 'selected' : '' ?>>-</option>
            <option value="*" <?= $op=="*" ? 'selected' : '' ?>>*</option>
            <option value="/" <?= $op=="/" ? 'selected' : '' ?>>/</option>
        </select>
        <input type="submit" value="Send">
        <?= $p2 == "0" && $op == "/" ?>
    </form>
    <?php
    require './auxiliar.php';
    if (!empty($p1) && !empty($p2)) {
        if (!ctype_digit($p1)) {
            mostrarError("en el primer operando se ha pasado algo que no es un numero");
        } elseif (!ctype_digit($p2)) {
            mostrarError("en el segundo operando se ha pasado algo que no es un numero");
        // algo falla y no entra en el elseif este.
        } elseif (($p2 == "0") && ($op == "/")) {
            mostrarError("no se puede dividir un numero entre 0");
        } else {
            operar($p1, $p2, $op);
        }
    }
    ?>
</body>
</html>
