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
    $query = "SELECT * FROM Especie";
    $stmt = $con->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>

    <h1><span> Especies en peligro </span></h1>


    <section class="contenedor contenido">

        <table class="tablaCategorias">
            <thead>
                <tr>
                    
                    <th>Nombre Cientifico</th>
                    <th>Nombre</th>
                    <th>Vulnerabilidad</th>
                    <th>Bioma</th>

                </tr>
            </thead>

            <tbody>

                <?php foreach ($registros as $fila) : ?>
               
                    <tr>
                        
                        <th><?php echo $fila->Nombre_Cienetifico ?></th>
                        <td><?php echo $fila->Nombre ?></td>
                        <td><?php echo $fila->Vulnerabilidad ?></td>
                        <td><?php echo $fila->Bioma ?></td>

                    <?php
                endforeach;
                    ?>
            </tbody>
        </table>
        <br>
        <br>
        <br>
        <section>
            <a class="boton " href="../pages/amenzas.php">Amenazas</a> 
            <a class="boton " href="../pages/habitads.php">Habitads</a> 
        </section>
        <br>
        <br>
</body>

<?php

include "footer.php";

?>

</html>