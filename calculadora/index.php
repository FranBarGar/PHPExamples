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

    try {
        $ar = compruebaParametros(VA, $err);
        extract($ar);
        compruebaValores($ar, OP, $err);
        formulario($ar, OP);
        muestraResultado($ar);
    } catch (Exception $e) {
        muestraErrores($err);
    }
    ?>
</body>
</html>
