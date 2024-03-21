<?php

$hostname='bhrhklb5czmbf1ce15iz-mysql.services.clever-cloud.com';
$database="bhrhklb5czmbf1ce15iz";
$username='utrqbqeb7krpcfzh';
$pass='4OCMgGWb3eL1IGNmR8m1';

$conexion= new mysqli($hostname,$username,$pass,$database);
if ($conexion->connect_error){
    die("Error conexion");
}
?>