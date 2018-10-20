<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <?php
    $num = isset($_GET['num']) ? trim($_GET['num']) : "";
    ?>
    <form class="6" action="" method="get">
        <label for="num">Numero: </label>
        <input id="num" type="text" name="num" value="<?= $num ?>">
        <input type="submit" value="Send">
    </form>
    <?php
    require './auxiliar.php';
    if (isset($num)) {
        if (!ctype_digit($num)) {
            mostrarError("se ha pasado algo que no es un numero");
        } else {
            if ($num < 0 || $num > 10) {
                mostrarError("el numero debe estar comprendido entre 0 y 10");
            } else {
                mostrarTabla($num);
            }
        }
    }
    ?>
</body>
</html>
