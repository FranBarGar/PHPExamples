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
    const VA = ["op", "p1", "p2"];
    $var = array_keys($_GET);
    sort($var);
    $err = [];



    // Comprobacion de parametros

    if (empty($_GET)) {
        $p1 = "0";
        $p2 = "0";
        $op = "+";
    } elseif ($var == VA) {
        $p1 = trim($_GET['p1']);
        $p2 = trim($_GET['p2']);
        $op = trim($_GET['op']);
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
        operar($p1, $p2, $op);
    } else {
        foreach ($err as $me) { ?>
            <h3>Error : <?= $me ?></h3>
            <?php
        }
    }
    ?>
</body>
</html>
