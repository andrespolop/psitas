<?php

include("conexion.php");

// Obtención de variables

$id = $_POST['id'];
$email = $_POST['email'];
$telefono = $_POST['telefono'];
$direccion = $_POST['direccion'];

// Creamos el SQL

$sql = "UPDATE terapeutas SET email = '$email', telefono = '$telefono', direccion = '$direccion' WHERE id = '$id'";

$resultado = mysqli_query($conexion, $sql);


if ($resultado) {
    echo "<script> alert('Se han actualizado los cambios correctamente.');
    window.location = '../terapeuta-perfil.php'; </script>";
} else {
    echo "<script>alert('No se pudo actualizar los datos');
    window.history.go(-1); </script>";
}
