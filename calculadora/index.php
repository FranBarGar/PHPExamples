<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta charset="utf-8">
    <title>Calculadora</title>
</head>
<body>
    <?php
    require './auxiliar.php';
    const OP = ["+", "-", "*", "/"];
    const VA = ["op"=>"+", "p1"=>"0", "p2"=>"0"];
    $err = [];
    $ar = paramTest(VA, $err);

    extract($ar);

    errTest($ar, OP, $err);

    form($ar);

    if (empty($err)) {
        mostrarResultado($ar);
    } else {
        muestraErrores($err);
    }
    ?>
</body>
</html>
