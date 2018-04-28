<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>
</head>
<body>
    <?php
    $borra_consul=$_POST["elimina"];
    require 'conexion.php';

    $eliminar="DELETE FROM CONTACTOS WHERE registro=:reg";
    $resultado=$conexion->prepare($eliminar);
    $resultado->execute(array(":reg"=>$borra_consul));
    echo"Contanto Docente  Eliminado";
    ?>
    <a href="eliminar.html">Regresar</a>
</body>
</html>