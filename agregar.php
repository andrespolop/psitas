<?php 
include("cn.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$correo = $_POST["correo"];
$telefono = $_POST["telefono"];
$cedula = $_POST["cedula"];
$direccion = $_POST["direccion"];
$contrasena = $_POST["contrasena"];


$insertar1 = "INSERT INTO `usuarios`(`id`, `nombre`, `apellido`, `correo`, `contrasena`, `telefono`, `cedula`, `direccion`, `tipo_u`) VALUES (null,'$nombre','$apellido','$correo','$contrasena','$telefono','$cedula','$direccion',2)";

$resultado = mysqli_query($conexion, $insertar1);

if($resultado){
    echo "<script>alert('REGISTRO EXITOSO');
    window.location='/'
    </script>";
}else{
    echo "<script>alert('REGISTRO FALLIDO');
    window.history.go(-1);
    </script>";
    
}

?>
