<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="icon" href="iconos/psi-tas_icon_No-Background.ico" type="image/icon type">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro en PSITAS</title>
    <link rel="stylesheet" href="estilos/registro.css">
    <script src="src/registro.js"></script>
</head>

<body>
    <header>
        <a href="index.php">
            <h1 class="titulo_psitas">PSI-TAS</h1>
        </a>
        <a href="index.php">
            <div class="imagen_icono"><img src="iconos/psitas_icon_NoBackground.jpg" alt="imagen_empresa"></div>
        </a>
    </header>

    <div class="container">
        <div class="header_form">
            <h1>Registrarse</h1>
        </div>
        <form action="php/registrarUsuarios.php" method="POST">
            <label for="nombre">Nombre</label>
            <input class="input_registro" type="text" id="nombre" name="nombre" placeholder="Nombres" required>

            <label for="apellido">Apellido</label>
            <input class="input_registro" type="text" id="apellido" name="apellido" placeholder="Apellidos" required>

            <label for="email">Correo</label>
            <input class="input_registro" type="email" id="email" name="email" placeholder="ejemplo@email.com" required>

            <label for="contrasena">Contraseña</label>
            <input class="input_registro" type="password" id="contrasena" name="contrasena" placeholder="Coloque su contraseña" minlength="8" required>

            <label for="telefono">Teléfono</label>
            <div class="div_telefono"><input class="input_registro" type="text" maxlength="15" id="telefono" name="telefono" placeholder="Coloque su teléfono" required /></div>

            <a href="login.php" class="ya_registrado">Ya estoy registrado</a>
            <input class="boton_registro" type="submit" value="Registrarse">

        </form>
    </div>




</body>

</html>