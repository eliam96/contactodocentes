<?php
try{
    $conexion=new PDO('mysql:host=localhost;dbname=contactos','root','');
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(Exception $e){
    die("ERROR: ".$e->getMessage());
}

//PROYECTO REALIZADO POR
//Lillian Maria Machuca Chavarria
//Edgar Eliam Santos
//PROGRAMACION ORIENTADA A OBJETOS
//Lic. Eduardo Vallejo
?>