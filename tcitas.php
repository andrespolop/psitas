<?php 
include("cn.php");
$id1= $_GET["id"]

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
	<script src="main.js"></script>
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
	$tcita = "SELECT u.nombre,u.apellido,u.cedula,c.fecha,c.hora  FROM horarios_disponibles c, usuarios u WHERE c.id_paciente=u.id AND c.id_terapeuta= $id1";
	$resultadop = mysqli_query($conexion, $tcita );
	while($row1 = mysqli_fetch_assoc($resultadop)) { ?>

		<div class="table__header">paciente</div> <div class="table__item"><?php echo $row1["nombre"] ?> <?php echo $row1["apellido"] ?></div>
		<div class="table__header">cedula</div><div class="table__item"><?php echo $row1["cedula"] ?></div>
		<div class="table__header">fecha</div><div class="table__item"><?php echo $row1["fecha"] ?> : <?php echo $row1["hora"] ?></div>

	<?php } ?>
					
					

</div>
<center><a href="admin.php" class="btn-volver">Volver</a></center>



</div>
		
			
			
		
</body>
</html>