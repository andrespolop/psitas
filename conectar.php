<?php
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $contrasena = $_POST['contrasena'];
    $telefono = $_POST['telefono'];
    

    // Database Connection //
    $conn = new mysqli('localhost','root','','registro');
    if($conn->connect_error){
        die('Connection Fallada : '.$conn->connect_error);
    }else{
        $stmt = $conn->prepare("insert into registro(nombre, apellido, email, contrasena, telefono)
        values(?,?,?,?,?)");
        $stmt->bind_param("ssssi",$nombre,$apellido,$email,$contrasena, $telefono);
        $stmt->execute();
        echo "registration succesfully...";
        $stmt->close();
        $conn->close();
    }
?>