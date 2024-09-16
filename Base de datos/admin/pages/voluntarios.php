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
    $query = "SELECT * FROM Voluntario";
    $stmt = $con->query($query);
    $registros = $stmt->fetchAll(PDO::FETCH_OBJ);
    ?>

    <h1><span> Miembros de la campaña </span></h1>


    <section class="contenedor contenido">

        <table class="tablaCategorias">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Primer_Apellido</th>
                    <th>Segundo_Apellido</th>
                    <th>Email</th>
                    <th>Nacionalidad</th>
                    <th>FechaNacimiento</th>
                </tr>
            </thead>

            <tbody>

                <?php foreach ($registros as $fila) : ?>         
                    <tr>
                        <th><?php echo $fila->ID ?></th>
                        <td><?php echo $fila->Nombre ?></td>
                        <td><?php echo $fila->Primer_Apellido ?></td>
                        <td><?php echo $fila->Segundo_Apellido ?></td>
                        <td><?php echo $fila->email ?></td>
                        <td><?php echo $fila->Nacionalidad ?></td>
                        <td><?php echo $fila->FechaNacimiento ?></td>

                    <?php
                endforeach;
                    ?>
            </tbody>
        </table>
        
        <br>
        <br>
        <br>
        <section>
            <a class="boton " href="../pages/index.php">Campañas</a>
        </section>
        <br>
        <br>
</body>

<?php

include "footer.php";

?>
</html>