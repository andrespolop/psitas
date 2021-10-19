<?php

$email = mysqli_real_escape_string($conectar, $_POST['email']);
$contrasena = mysqli_real_escape_string($conectar, $_POST['contrasena']);

// Hacemos la sentencia SQL

$sql = "SELECT id FROM registro WHERE email = '$email' and contrasena = '$contrasena'";

//EJECUTAMOS LA SENTENCIA CON mysql_query

$ejecutar = $conectar->query($sql);

//verificamos la ejecución

$rows = $ejecutar->num_rows;

if ($rows > 0) {
    $row = mysqli_fetch_assoc($ejecutar);
    session_start();
    $_SESSION['id_terapeuta'] = $row["id"];
    header("location: ../terapeuta-perfil.php");
} else {
    echo "<script> alert('Datos ingresados erróneos');
    window.location = '../login.php'
    </script>";
}

// mysqli_free_result($ejecutar);
// mysqli_close($conectar);