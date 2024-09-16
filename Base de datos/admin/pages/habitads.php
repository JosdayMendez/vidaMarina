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
    $query = "SELECT * FROM Habitad";
    $stmt = $con->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>

    <h1><span> Habitads </span></h1>


    <section class="contenedor contenido">

        <table class="tablaCategorias">
            <thead>
                <tr>
                    <th>Codigo Bioma</th>
                    <th>Bioma</th>
                    <th>Tipo</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($registros as $fila) : ?>
   
                    <tr>
                        <th><?php echo $fila->Codigo_Bioma ?></th>
                        <th><?php echo $fila->Bioma ?></th>
                        <td><?php echo $fila->Tipo ?></td>

                    <?php
                endforeach;
                    ?>
            </tbody>
        </table>

        <br>
        <br>
        <br>
        <section>
            <a class="boton " href="../pages/especies.php">Especies</a>
            <a class="boton " href="../pages/index.php">Campañas</a>
        </section>
        <br>
        <br>
</body>

<?php

include "footer.php";

?>
</html>