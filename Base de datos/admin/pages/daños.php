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
    $query = "SELECT * FROM Contaminante";
    $stmt = $con->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>

    <h1><span> Contaminantes </span></h1>


    <section class="contenedor contenido">

        <table class="tablaCategorias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Daño</th>
    
                </tr>
            </thead>

            <tbody>

                <?php foreach ($registros as $fila) : ?>
                   
                    <tr>
                   
                        <th><?php echo $fila->IDX ?></th>
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
            <a class="boton " href="../pages/habitads.php">Habitads</a>
            <a class="boton " href="../pages/especies.php">Especies</a>
        </section>
        <br>
        <br>
</body>

<?php

include "footer.php";

?>