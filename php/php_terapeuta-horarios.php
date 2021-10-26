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

$nuevo = json_encode($array_query);

echo "
   <script>
   console.log($nuevo);
   </script>
";



// $json_resultado['horarios_disponibles'] = $array_col;

// echo json_encode($resultado);



// $nuevo = json_encode($json_array);

// echo "
//    <script>
//    console.log($nuevo);
//    </script>
// ";

//  echo json_encode($json_array);

// echo '<pre>';
// print_r($json_array);
// echo '</pre>'


// echo $id; echo " - ";
// echo $id_terapeuta;echo "</br>";



   
?>