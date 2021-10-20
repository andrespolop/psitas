<?php

// Conexión base de datos

$conectar = mysqli_connect("localhost","root","","psitas");
if(mysqli_connect_errno()){
    echo "Falló al conectar con Base de Datos";
    exit();
}

// Creamos la sentencia SQL

$sql = "SELECT * FROM terapeutas";

//Ejecutar la sentencia SQL
$ejecutar = mysqli_query($conectar,$sql);

//Verificamos ejecución

if(!$ejecutar){
    echo "No se ejecutó";
}else{
    echo "<script>alert('Registro exitoso');
    window.location = '../index.php';
    </script>";
}