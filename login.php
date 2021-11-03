<?php

include("php/conexion.php");
//LOGIN 
if (!empty($_POST)) {

    $correo = mysqli_real_escape_string($conexion, $_POST['correo']);
    $contrasena = mysqli_real_escape_string($conexion, $_POST['contrasena']);

    // Hacemos la sentencia SQL

    $sql = "SELECT id, tipo_u FROM usuarios WHERE correo = '$correo' and contrasena = '$contrasena'";

    //EJECUTAMOS LA SENTENCIA CON mysql_query

    $ejecutar = $conexion->query($sql);

    $ejecutar2 = $conexion ->query($sql);
    //verificamos la ejecución

    // Verificar tipo de Usuario
    $tipo_user = $ejecutar2->fetch_assoc();

    // echo $tipo_user['tipo_u'];
    

    $rows = $ejecutar->num_rows;
    if (isset($tipo_user)) {

        if ($tipo_user["tipo_u"] == 2) {
            if ($rows > 0) {
                $row = $ejecutar->fetch_assoc();
                session_start();
                $_SESSION['id_terapeuta'] = $row["id"];
                // echo $_SESSION['id_terapeuta'];
            
            
                header("Location: terapeuta-perfil.php");
            
            }
        }
        else if ($tipo_user["tipo_u"] == 1) {
            if ($rows > 0) {
                $row = $ejecutar->fetch_assoc();
                session_start();
                $_SESSION['id_paciente'] = $row["id"];                
            
                header("Location: paciente-perfil.php");
            
            }
        }else if ($tipo_user["tipo_u"] == 3) {
            if ($rows > 0) {
                $row = $ejecutar->fetch_assoc();
                session_start();
                $_SESSION['id_administrador'] = $row["id"];                
            
                header("Location: admin.php");
            
            }
    } else {
        echo "<script> alert('Datos ingresados erróneos');
            window.location = 'login.php'
            </script>";
    }
}}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login en PSITAS</title>
    <link rel="stylesheet" href="estilos/login.css">
    
    <title>Login</title>
</head>

<body>

    <header>
        <a href="login.php">
            <h1 class="titulo_psitas">PSI-TAS</h1>
        </a>
        <a href="login.php">
            <div class="imagen_icono"><img src="iconos/psitas_icon_NoBackground.jpg" alt="imagen_empresa"></div>
        </a>
    </header>


    <div class="container">
        <div class="header_form">
            <h1>Login</h1>
        </div>
        <form action="<?php $_SERVER["PHP_SELF"]; ?>" method="POST">
            <label for="correo">Correo</label>
            <input type="email" name="correo" placeholder="Ingrese su correo" id="correo">

            <label for="contrasena">Contraseña</label>
            <input type="password" id="contrasena" name="contrasena" placeholder="Contraseña">

            <a href="#" class="olvido_contra">¿Has olvidado tu contraseña?</a>

            <input class="boton_ingreso" type="submit" value="Ingresar">
            <p><a href="registro.php" class="no_registro">No estoy registrado</a></p>
        </form>


    </div>




</body>

</html>