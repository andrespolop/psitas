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
	<link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>

<nav class="nav">
        <input type="checkbox" id="check_nav">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo_nav"><a href="index.php">Psitas</a></label>
        <ul class="ul_nav">
            
            <li class="li_nav"><a class="a_nav" href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>


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
<center><a href="admin.php" class="btn-volver">Volver</a></center>
</div>	
			
		
</body>
</html>