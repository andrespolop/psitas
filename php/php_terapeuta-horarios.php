<?php

include("conexion.php");


$array_query = array();

$sql_recibe = "SELECT * FROM horarios_disponibles";
$resultado = mysqli_query($conexion, $sql_recibe);


while ($row = $resultado ->fetch_array()) { 
   $id = $row['id'];
   $id_terapeuta = $row['id_terapeuta'];
   $array_query[] = array('id'=> $id, 'id_terapeuta'=>$id_terapeuta);    
}

echo json_encode($array_query);
   
?>