<?php

// Conexión base de datos

$conectar = mysqli_connect("localhost","root","","psitas");
if(mysqli_connect_errno()){
    echo "Falló al conectar con Base de Datos";
    exit();
}

// Recuperar variables del formulario

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$contrasena = $_POST['contrasena'];
$telefono = $_POST['telefono'];

// Creamos la sentencia SQL

$sql = "INSERT INTO usuario (nombre, apellido, correo, contrasena, telefono) values('$nombre','$apellido','$email','$contrasena','$telefono')";

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
