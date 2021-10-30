<?php 
include("cn.php");
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
<div class="caja2">
<form action="agregar.php" method="post">
<center><h2>NUEVO TERAPEUTA</h2></center>
<br> 
<div class="flabel"><label for="" class="flabe2">Nombre</label><input name="nombre" type="text" class="finput" ></div>
<br>
<div class="flabel"><label for="" class="flabe2">Apellido</label><input name="apellido" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2">Correo</label><input name="correo" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2">Telefono</label><input name="telefono" type="number"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2">Cedula</label><input name="cedula" type="number"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2">Direccion</label><input name="direccion" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2">contraseña</label><input name="contrasena" type="password"class="finput"></div>
<br>


<input type="submit" class="btn-agregar" onClick="enviar()">
</form>
<script>
     function enviar() {
       window.location="admin.php";  
     }
   </script>

<br> 
<center><a href="admin.php" class="btn">volver</a></center>


</div>
	
</body>
</html>