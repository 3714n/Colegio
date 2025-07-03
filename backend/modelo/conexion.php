<?php
$host="localhost";
$usuario="root";
$password="";
$dataBase="colegio";

$conexion=new mysqli($host, $usuario, $password, $dataBase);
$conexion->set_charset("utf8");
?>