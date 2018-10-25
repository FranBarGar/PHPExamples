<?php
/**
* @author Francisco Barba García
* @copyright Copyright (c) 2018 Francisco Barba García
* @license https://www.gnu.org/licenses/gpl.txt
*/

function selected($op1, $op2)
{
    return $op1==$op2 ? 'selected' : '';
}

/**
* Muestra el resultado de la operacion.
* @param  string $p1 Primer operador.
* @param  string $p2 Segundo operador.
* @param  string $op Operando.
*/
function opera($ar)
{
    switch ($ar["op"]) {
        case '+':
        $res = $ar["p1"]+$ar["p2"];
        break;
        case '-':
        $res = $ar["p1"]-$ar["p2"];
        break;
        case '*':
        $res = $ar["p1"]*$ar["p2"];
        break;
        case '/':
        $res = $ar["p1"]/$ar["p2"];
        break;
        default:
        break;
    }
    return $res;
}

function formulario($ar, $ops)
{ ?>
    <form action="" method="get">
        <label for="p1">Primer operando*: </label>
        <input id="p1" type="text" name="p1" value="<?= $ar["p1"] ?>"><br>
        <label for="p2">Segundo operando*: </label>
        <input id="p2" type="text" name="p2" value="<?= $ar["p2"] ?>"><br>
        <label for="op">Operacion*: </label>
        <select name="op">
            <?php foreach ($ops as $o) { ?>
                <option value="<?= $o ?>" <?= selected($ar["op"], $o) ?>><?= $o ?></option>
            <?php } ?>
        </select><br>
        <input type="submit" value="Calcular">
    </form>
<?php }

function compruebaParametros($va, &$err) {
    // Comprobacion de parametros
    if (!empty($_GET)) {
        if (empty(array_diff_key($va, $_GET)) && empty(array_diff_key($_GET, $va))) {
            return array_map("trim", $_GET);
        } else {
            $err[] = "Los parametros recibidos no son correctos.";
        }
    }
    return $va;
}

function compruebaValores($ar, $ops, &$err){
    if (empty($err)) {
        if (!is_numeric($ar["p1"])) {
            $err[] = "El primer operando no es un numero.";
        }
        if (!is_numeric($ar["p2"])) {
            $err[] = "El segundo operando no es un numero.";
        }
        if (!in_array($ar["op"], $ops)) {
            $err[] = "El operador no es valido.";
        }
    } else {
        throw new Exception();
    }
}

function muestraResultado($ar){
    ?>
    <h3>Resultado: <?= opera($ar) ?></h3>
    <?php
}

/**
* Muestra los mensajes de error.
* @param  array $err El mensaje de error.
*/
function muestraErrores($err){
    foreach ($err as $me) { ?>
        <h3>Error : <?= $me ?></h3>
        <?php
    }
}
