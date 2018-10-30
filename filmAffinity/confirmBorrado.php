<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title>Confirmar Borrado</title>
    </head>
    <body>
        <?php
        if (!empty($_GET['id'])) {
            $id = $_GET['id'];
        } else {

        }

        ?>
        <h3>¿Seguro que desea borrar la fila?</h3>
        <form action="index.php" method="post">
            <input type="hidden" name="id" value="<?= $id ?>">
            <input type="submit" value="Si">
            <a href="index.php">No</a>
        </form>
    </body>
</html>
