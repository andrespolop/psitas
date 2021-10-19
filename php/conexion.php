<?php 

$conexion = new mysqli("localhost", "root", "", "psitas");
if(mysqli_connect_errno()){
    echo "Error al conectarse a la base de datos ",mysqli_connect_error();
    exit();
}
