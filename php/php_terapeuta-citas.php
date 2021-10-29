<?php

include("conexion.php");
session_start();
session_write_close();
$id_terapeuta = $_SESSION['id_terapeuta'];

$array_query = array();

$sql = "SELECT ho.fecha, ho.hora, us.nombre,us.apellido,us.correo, us.telefono, us.cedula FROM horarios_disponibles as ho JOIN usuarios as us ON ho.id_paciente = us.id and ho.id_terapeuta = '$id_terapeuta'  ORDER BY ho.fecha ASC, ho.hora ASC; ";

$ejecutar = $conexion ->query($sql);

while ($row = $ejecutar ->fetch_array()) { 
    array_push($array_query, $row);
 };
 
 echo json_encode(array_values($array_query));




?>