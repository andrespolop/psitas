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
	<link rel="stylesheet" href="estilos/estilo2.css">
	<link rel="stylesheet" href="font-awesome.css">
	<script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="src/main.js"></script>
</head>


<body>
	<!-- NAVBAR RESPONSIVE -->
	<nav class="nav">
        <input type="checkbox" id="check_nav">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo_nav"><a href="login.php">Psitas</a></label>
        <ul class="ul_nav">
            
            <li class="li_nav"><a class="a_nav" href="php/salir.php">SALIR</a></li>
        </ul>
    </nav>

<div class="wrap">
		<ul class="tabs">
			<li class="btn-tabla"><a href="#tab1"><span class="tab-text">TERAPEUTAS</span></a></li>
			<li class="btn-tabla"><a href="#tab2"><span class="tab-text">PACIENTES</span></a></li>
		
		</ul>

		<div class="secciones">
			<article id="tab1">
			
				<div class="container-table"> 
					<div class="table__title">TERAPEUTAS</div>
					<div class="table__header">Nombre</div>
					
					<div class="table__header">Cédula</div>
					<div class="table__header">Correo</div>
					<div class="table__header">Teléfono</div>
					<div class="table__header">Citas</div>
					<div class="table__header">Eliminar</div>
					
					
					<?php $resultado1 = mysqli_query($conexion, $terapeutas );
					while($row = mysqli_fetch_assoc($resultado1)) {
					?>
					<?php $id_usuario = $row["id"]; ?>
					<div class="table__item"><?php echo $row["nombre"] ?> <?php echo $row["apellido"] ?></div>
					
					<div class="table__item"><?php echo $row["cedula"] ?></div>
					<div class="table__item"><?php echo $row["correo"] ?></div>
					<div class="table__item"><?php echo $row["telefono"] ?></div>
			
					<div class="table__item"><a href="tcitas.php?id=<?php echo $row["id"]; ?>" class="btn-ver">VER</a></div>
					<div class="table__item"><a href="teliminar.php?id=<?php echo $row["id"]; ?>" class="btne"><i class="fas fa-trash-alt"></i></a></div>
	
					<?php } ?>
				</div>
				<a href="tagregar.php" class="btn-agregar">AGREGAR</a>
				
			</article>
			<article id="tab2">
				<div class="container-table"> 
					<div class="table__title">PACIENTES</div>
					<div class="table__header">Nombre</div>
					<div class="table__header">Cédula</div>
					<div class="table__header">Correo</div>
					<div class="table__header">Teléfono</div>
					<div class="table__header">Citas</div>
					<div class="table__header">Eliminar</div>

					<?php $resultado2 = mysqli_query($conexion,$paciente );
					while($row = mysqli_fetch_assoc($resultado2)) {
					?>
					<div class="table__item"><?php echo $row["nombre"] ?> <?php echo $row["apellido"] ?></div>
					<div class="table__item"><?php echo $row["cedula"] ?></div>
					<div class="table__item"><?php echo $row["correo"] ?></div>
					<div class="table__item"><?php echo $row["telefono"] ?></div>
					<div class="table__item"><a href="pcitas.php?id=<?php echo $row["id"]; ?>" class="btn-agregar">VER</a></div>
					<div class="table__item"><a href="peliminar.php?id=<?php echo $row["id"]; ?>" class="btne"><i class="fas fa-trash-alt"></i></a></div>
					<?php } ?>
				</div>
				
			</article>
			
		</div>
	</div>
	<script src="src/confirmo.js"></script>
</body>
</html>