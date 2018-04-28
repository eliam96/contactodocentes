<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link  href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Docentes</title>
</head>
<body>
<?PHP

include("conexion.php");



$conexion=mysqli_connect($db_host,$db_usuario,$db_contrasenia,$db_name);
if(mysqli_connect_errno()){
    echo "HA OCURRIDO UN ERROR EN LA CONEXION";
    exit();
}else{
    echo "Conexion Exitosa "."<br><br>";    
}

mysqli_select_db($conexion,$db_name) or die ("NO SE HA PODIDO ENCONTRAR LA BASE DE DATOS");
mysqli_set_charset($conexion,"utf8");

$consulta="SELECT * FROM CONTACTOS";
$resultados=mysqli_query($conexion,$consulta);
?>
<table class="table">
<tr>
<td>Nombre</td>
<td>Apellido</td>
<td>Direccion</td>
<td>Telefono</td>
<td>Correo</td>
</tr>

<?php
if(!$resultados){
    mysqli_error($conexion);
    echo "HA OCURRIDO UN ERROR".mysqli_error($conexion);
}
while($fila=mysqli_fetch_array($resultados, MYSQL_ASSOC)){
?>
<tr>
    <td><?echo $fila["NOMBRE"]?></td>
    <td><?echo $fila["APELLIDO"]?></td>
    <td><?echo $fila["DIRECCION"]?></td>
    <td><?echo $fila["TEL"]?></td>
    <td><?echo $fila["CORREO"]?></td>
    </tr>
    <?php
}
mysqli_close($conexion);
?>

</body>
</html>