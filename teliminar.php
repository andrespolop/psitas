<?php 
include("cn.php");


session_start();
session_write_close();


if (!isset($_SESSION['id_administrador'])) {
    header("Location: login.php");
}

$ide= $_GET["id"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="estilos/estilo2.css">
	<link rel="stylesheet" href="font-awesome.css">
	<link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>
<div class="caja">
 					
	<?php
	$teliminar1 = "DELETE FROM `usuarios` WHERE id= $ide";
    $teliminar2 = "DELETE FROM `citas` WHERE terapeuta_id= $ide";
	mysqli_query($conexion, $teliminar2 );
	mysqli_query($conexion, $teliminar1 );
    
    
    ?>
<center><h1>OPERACIÓN EXITOSA</h1></center>
<br> 
<center><p><h1>Se elimino correctamente el registro</h1></p></center>
<br> 
<center><a href="admin.php" class="btn-volver">volver</a></center>



</div>
		
			
			
		
</body>
</html>