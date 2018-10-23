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
    extract(VA);
    $err = [];

    // Comprobacion de parametros
    if (empty($_GET)) {
    } elseif (empty(array_diff_key(VA, $_GET)) && empty(array_diff_key($_GET, VA))) {
        // foreach ($_GET as $k => &$v) {
        //     $v = trim($v);
        // }
        $_GET = array_map("trim", $_GET);
        extract($_GET);
        // extract($_GET, EXTR_IF_EXISTS);
    } else {
        $err[] = "Los parametros recibidos no son correctos.";
    }


    if (empty($err)) {
        if (!is_numeric($p1)) {
            $err[] = "El primer operando no es un numero.";
        }
        if (!is_numeric($p2)) {
            $err[] = "El segundo operando no es un numero.";
        }
        if (!in_array($op, OP)) {
            $err[] = "El operador no es valido.";
        }
    }

    form($p1, $p2, $op);

    if (empty($err)) {
        ?>
        <h3>Resultado: <?= opera($p1, $p2, $op) ?></h3>
        <?php
    } else {
        foreach ($err as $me) { ?>
            <h3>Error : <?= $me ?></h3>
            <?php
        }
    }
    ?>
</body>
</html>
