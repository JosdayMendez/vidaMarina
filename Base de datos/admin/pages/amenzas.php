<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba</title>
</head>
<?php

include "header.php";
?>
<body>
    <?php
    include_once '../class/conexion.php'
    ?>

    <?php
    $cantidad = 0;
    $query = "SELECT * FROM Amenaza";
    $stmt = $con->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>

    <h1><span> Habitads </span></h1>


    <section class="contenedor contenido">

        <table class="tablaCategorias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tipo</th>
                    <th>Descripcion</th>
                    <th>Ubicacion Geografica</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($registros as $fila) : ?>
                    <?php $cantidad = $cantidad + 1 ?>
                    <tr>
                        <th><?php echo $fila->ID ?></th>
                        <th><?php echo $fila->Tipo ?></th>
                        <td><?php echo $fila->Descripcion ?></td>
                        <td><?php echo $fila->UbicacionGeografica ?></td>

                    <?php
                endforeach;
                    ?>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <section>
            <a class="boton " href="../pages/daños.php">Daños</a>
        </section>
        <br>
        <br>
</body>

<?php

include "footer.php";

?>
</html>