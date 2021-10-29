<?php

// Conexión base de datos

$conn = mysqli_connect("localhost","root","","psitas");
if(mysqli_connect_errno()){
    echo "Fallo al conectar con Base de Datos";
    exit();
}

// Creamos la sentencia SQL

$sql = "SELECT ho.id_horarios,ho.fecha,ho.hora,ho.id_terapeuta, ho.id_paciente, us.nombre,us.apellido,us.telefono, us.correo  
FROM horarios_disponibles as ho JOIN usuarios as us ON ho.id_terapeuta = us.id ORDER BY fecha ASC, hora ASC;";
 

//Ejecutar la sentencia SQL
$resultado = mysqli_query($conn,$sql);

//Verificamos ejecución
/*if(!$resultado){
    echo "No se ejecutó";
}else{
    echo "<script>alert('Registro exitoso');
    window.location = '../index.php';
    </script>";
}*/
$rows = array();
while ($row = mysqli_fetch_assoc($resultado)) {
    array_push($rows,$row);
}

echo json_encode($rows);


//revisamos que exista alguna fila

/*$check = mysqli_num_rows ($resultado)
if ($check > 0) {
    while ($row <|= 10) {
        # code...
    }
}*/