<?php 
include("cn.php");
$id2= $_GET["id"]

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="estilos/estilo2.css">
	<link rel="stylesheet" href="font-awesome.css">

	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="src/main.js"></script>
</head>
<body>
<div class="caja">
<div class="container-table"> 
	<div class="table__title">CITAS</div>
					
	<?php
	$tcita = "SELECT u.nombre,u.apellido,u.cedula,c.fecha FROM citas c, usuarios u WHERE c.terapeuta_id=u.id AND c.paciente_id= $id2";
	$resultadop = mysqli_query($conexion, $tcita );
	while($row1 = mysqli_fetch_assoc($resultadop)) { ?>

		<div class="table__header">doctor</div> <div class="table__item"><?php echo $row1["nombre"] ?> <?php echo $row1["apellido"] ?></div>
		<div class="table__header">cedula</div><div class="table__item"><?php echo $row1["cedula"] ?></div>
		<div class="table__header">fecha</div><div class="table__item"><?php echo $row1["fecha"] ?></div>

	<?php } ?>
					
					

</div>	
<center><a href="admin.php" class="btn">volver</a></center>
</div>	
			
		
</body>
</html>