<?php

$hostname='localhost';
$database="turismo_verde";
$username='root';
$pass='';

$conexion= new mysqli($hostname,$username,$pass,$database);
if ($conexion->connect_error){
    die("Error conexion");
}
?>