<?php 
include("cn.php");
$terapeutas = "SELECT `nombre`, `apellido`,`cedula`, `correo`, `telefono`, `id` FROM `usuarios` WHERE tipo_u=2";
$paciente = "SELECT `nombre`, `apellido`,`cedula`, `correo`, `telefono` , `id` FROM `usuarios` WHERE tipo_u=3";
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<title>ADMINISTRADOR</title>
	<link rel="stylesheet" href="estilo2.css">
	<link rel="stylesheet" href="font-awesome.css">
	<link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="scripts/main.js"></script>
</head>
<body>
	<div class="wrap">
		<ul class="tabs">
			<li><a href="#tab1"><span class="tab-text">TERAPEUTAS</span></a></li>
			<li><a href="#tab2"><span class="tab-text">PACIENTES</span></a></li>
		
		</ul>

		<div class="secciones">
			<article id="tab1">
				<div class="container-table"> 
					<div class="table__title">TERAPEUTAS</div>
					<div class="table__header">nombre y apellido</div>
					
					<div class="table__header">cedula</div>
					<div class="table__header">correo</div>
					<div class="table__header">telefono</div>
					<div class="table__header">citas</div>
					<div class="table__header">eliminar</div>
					
					
					<?php $resultado1 = mysqli_query($conexion, $terapeutas );
					while($row = mysqli_fetch_assoc($resultado1)) {
					?>
					<?php $id_usuario = $row["id"]; ?>
					<div class="table__item"><?php echo $row["nombre"] ?> <?php echo $row["apellido"] ?></div>
					
					<div class="table__item"><?php echo $row["cedula"] ?></div>
					<div class="table__item"><?php echo $row["correo"] ?></div>
					<div class="table__item"><?php echo $row["telefono"] ?></div>
			
					<div class="table__item"><a href="tcitas.php?id=<?php echo $row["id"]; ?>" class="btn">VER</a></div>
					<div class="table__item"><a href="" class="btn">-</a></div>
	
					<?php } ?>
				</div>

				
			</article>
			<article id="tab2">
				<div class="container-table"> 
					<div class="table__title">PACIENTES</div>
					<div class="table__header">nombre y apellido</div>
					<div class="table__header">cedula</div>
					<div class="table__header">correo</div>
					<div class="table__header">telefono</div>
					<div class="table__header">citas</div>
					<div class="table__header">eliminar</div>

					<?php $resultado2 = mysqli_query($conexion,$paciente );
					while($row = mysqli_fetch_assoc($resultado2)) {
					?>
					<div class="table__item"><?php echo $row["nombre"] ?> <?php echo $row["apellido"] ?></div>
					<div class="table__item"><?php echo $row["cedula"] ?></div>
					<div class="table__item"><?php echo $row["correo"] ?></div>
					<div class="table__item"><?php echo $row["telefono"] ?></div>
					<div class="table__item"><a href="pcitas.php?id=<?php echo $row["id"]; ?>" class="btn">VER</a></div>
					<div class="table__item"><a href="" class="btn">-</a></div>
					<?php } ?>
				</div>
				
			</article>
			
		</div>
	</div>
</body>
</html>