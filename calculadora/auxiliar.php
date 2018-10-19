<?php
/**
* @author Francisco Barba García
* @copyright Copyright (c) 2018 Francisco Barba García
* @license https://www.gnu.org/licenses/gpl.txt
*/

/**
* Muestra un mensaje de error.
* @param  string $err El mensaje de error.
*/
function mostrarError($err)
{
    echo "<h3>Error: $err</h3>";
}

/**
* Muestra la tabla de multiplicar.
* @param  string|int $num El numero del cual sacar la tabla.
*/
function operar($p1, $p2, $op)
{
    switch ($op) {
        case '+':
        $res = $p1+$p2;
        echo "<p>{$p1} {$op} {$p2} = {$res}</p>";
        break;
        case '-':
        $res = $p1-$p2;
        echo "<p>{$p1} {$op} {$p2} = {$res}</p>";
        break;
        case '*':
        $res = $p1*$p2;
        echo "<p>{$p1} {$op} {$p2} = {$res}</p>";
        break;
        case '/':
        $res = $p1/$p2;
        echo "<p>{$p1} {$op} {$p2} = {$res}</p>";
        break;
        default:
        echo "Error";
        break;
    }
}
