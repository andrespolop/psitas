<?php 
include("cn.php");
$ide= $_GET["id"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="font-awesome.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="main.js"></script>
</head>
<body>
<div class="caja">
 					
	<?php
	$teliminar1 = "DELETE FROM `usuarios` WHERE id= $ide";
    $teliminar2 = "DELETE FROM `citas` WHERE terapeuta_id= $ide";
	mysqli_query($conexion, $teliminar2 );
	mysqli_query($conexion, $teliminar1 );
    
    
    ?>
<center><marquee style='width: 100%; color: blue;'><h1>OPERACION EXITOSA</h1></marquee></center>
<br> 
<center><p><h1>Se elimino correctamente el registro</h1></p></center>
<br> 
<center><a href="admin.php" class="btn">volver</a></center>



</div>
		
			
			
		
</body>
</html>