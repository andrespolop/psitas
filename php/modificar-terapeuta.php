<?php

include("conexion.php");

// Obtención de variables

$id = $_POST['id'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Creamos el SQL

$sql = "UPDATE usuarios SET correo = '$correo', telefono = '$telefono', direccion = '$direccion' WHERE id = '$id'";

$resultado = mysqli_query($conexion, $sql);


if ($resultado) {
    echo "<script> alert('Se han actualizado los cambios correctamente.');
    window.location = '../terapeuta-perfil.php'; </script>";
} else {
    echo "<script>alert('No se pudo actualizar los datos');
    window.history.go(-1); </script>";
}
