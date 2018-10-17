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
function mostrarTabla($num)
{
  // global $num;
  ?>
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
  <?php 
}
