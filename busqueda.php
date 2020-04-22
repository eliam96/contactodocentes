<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contactos Docentes</title>
</head>
<body>
<!--PROYECTO REALIZADO POR:-->
<!--Edgar Eliam Santos-->
<!--PROGRAMACION ORIENTADA A OBJETOS-->
<!--Lic. Eduardo Vallejo-->
<?php
$buscador=$_POST["buscar"];

require 'conexion.php';

#Query de busqueda
$buscar="SELECT *FROM CONTACTOS WHERE registro LIKE '%$buscador%'";

#Preparación 
$resultado=$conexion->prepare ($buscar);
$resultado->execute(array($buscador));

while($campo=$resultado->fetch(PDO::FETCH_ASSOC)){
    echo "NOMBRE: " . $campo['NOMBRE'] . "<br>" . "APELLIDOS: ". $campo['APELLIDO']. "<br>". "CORREO: ". $campo['CORREO']. "<br>".
    "TELEFONO: " . $campo['TEL'] . "<br>" . "DIRECCION: " . $campo['DIRECCION'] . "<br>" . "AREA DE ENSEÑANZA: " . $campo['AREA'].
    "<br><br>";
}
?>

</body>
</html>