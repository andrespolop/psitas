<?php 
include("cn.php");


session_start();
session_write_close();


if (!isset($_SESSION['id_administrador'])) {
    header("Location: login.php");
}

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

<div class="caja2">
<form action="agregar.php" method="post">
<center><h2>NUEVO TERAPEUTA</h2></center>
<br> 
<div class="flabel"><label for="" class="flabe2"><b>Nombre</b> </label><input name="nombre" type="text" class="finput" ></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Apellido</b> </label><input name="apellido" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Correo</b> </label><input name="correo" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Telefono</b> </label><input name="telefono" type="number"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Cedular</b> </label><input name="cedula" type="number"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Direccion</b> </label><input name="direccion" type="text"class="finput"></div>
<br>
<div class="flabel"><label for="" class="flabe2"><b>Contraseña</b> </label><input name="contrasena" type="password"class="finput"></div>
<br>


<input type="submit" class="btn-agregar" value="REGISTRAR" onClick="enviar()">
</form>
<script>
     function enviar() {
       window.location="admin.php";  
     }
   </script>

<br> 
<center><a href="admin.php" class="btn-volver">Volver</a></center>


</div>
	
</body>
</html>