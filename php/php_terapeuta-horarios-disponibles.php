<?php

include("conexion.php");


$array_query = array();

$sql_recibe = "SELECT * FROM `horarios_disponibles` ORDER BY fecha asc, hora ASC; ";
$resultado = mysqli_query($conexion, $sql_recibe);


while ($row = $resultado ->fetch_array()) { 
   array_push($array_query, $row);
}

echo json_encode($array_query);
   
?>