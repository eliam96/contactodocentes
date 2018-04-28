<?php
$insertar_reg=$_POST["registro"];
$insertar_nombre=$_POST["nombre"];
$insertar_ape=$_POST["apellido"];
$insertar_correo=$_POST["email"];
$insertar_tel=$_POST["tel"];
$insertar_area=$_POST["area"];
$insertar_direc=$_POST["direc"];

require 'conexion.php';

$sql="INSERT INTO CONTACTOS(REGISTRO,NOMBRE,APELLIDO,CORREO,TEL,DIRECCION,AREA)VALUES(:reg,:nom,:ape,:correo,:tel,:direc,:area)";
$resultado=$conexion->prepare($sql);
$resultado->execute(array(":reg"=>$insertar_reg,":nom"=>$insertar_nombre,":ape"=>$insertar_ape,":correo"=>$insertar_correo,
":tel"=>$insertar_tel,":direc"=>$insertar_direc,":area"=>$insertar_area));

echo "DOCENTE INGRESADO...";
$resultado->CloseCursor();
?>
<a href='ingreso.html'>Regresar a formulario</a>