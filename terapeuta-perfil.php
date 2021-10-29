<?php
include("php/conexion.php");
session_start();
session_write_close();


if (!isset($_SESSION['id_terapeuta'])) {
    header("Location: index.php");
}
$id_terapeuta = $_SESSION['id_terapeuta'];



$sql = "SELECT * FROM usuarios WHERE id = '$id_terapeuta'";

$ejecutar = $conexion ->query($sql);

$row = $ejecutar->fetch_assoc();


?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <script src="https://kit.fontawesome.com/50ca7f45e4.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="estilos/terapeuta-perfil.css">
    <title>Terapeuta-perfil</title>
</head>

<body>
    <!-- CREAMOS EL NAVBAR DEL APARTADO DE CITAS DEL TERAPEUTA-->
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class="fas fa-bars"></i>
        </label>
        <label class="logo"><a href="index.html">Psitas</a></label>
        <ul>
            <li><a href="terapeuta-citas.php">CITAS</a></li>
            <li><a href="terapeuta-horarios.php">HORARIOS</a></li>
            <li><a class="active" href="terapeuta-perfil.php">MI PERFIL</a></li>
            <li><a href="php/salir.php">SALIR</a></li>
        </ul>

        <!--Comenzamos a crear el perfil-->

        <div class="flex-container">
            <div class="container-card">
                <i class="fas fa-user-md fa-10x" style="color: rgb(99, 99, 99)"></i>
                <p> <?php echo $row['nombre'] ?> </p>
                <p> <?php echo utf8_decode($row['telefono']) ?> </p>
                <p>Psiquiatra</p>
                <p>Universidad de Cartagena</p>
            </div>
            <form class="container-info" action="php/modificar-terapeuta.php" method="POST">
                <h2>MI INFORMACIÓN</h2>
                <input type="hidden" value="<?php echo $row['id'] ?>" name="id">
                <div><b class="nombre">Nombre:</b><input name="nombre" value="<?php echo $row['nombre']; ?>" disabled></input></div>
                <div><b>Cédula:</b><input name="cedula" value="<?php echo $row['cedula']; ?>" disabled></div>
                <div><b class="email">Email:</b><input type="email" name="correo" required value="<?php echo $row['correo']; ?>"></input></div>
                <div><b class="celular">Celular:</b><input name="telefono" value="<?php echo $row['telefono']; ?>" maxlength="15"></input></div>
                <div><b class="direccion">Dirección:</b><input name="direccion" value="<?php echo $row['direccion']; ?>"></input></div>
                <?php mysqli_free_result($ejecutar) ?>
                <input class="editar-info" type="submit" value="Actualizar datos">
            </form>

        </div>


    </nav>
</body>

</html>