 <?php 

$conectar = mysqli_connect("localhost", "root", "","psitas");

if(mysqli_connect_errno()){
    echo "Fallo al tratar de conectar con base de datos Registro";
    exit();
}

//Recuperar variables del formulario


$email = mysqli_real_escape_string($conectar,$_POST['email']);
$contrasena = mysqli_real_escape_string($conectar,$_POST['contrasena']);

// Hacemos la sentencia SQL

$sql = "SELECT * FROM registro WHERE email = '$email' and contrasena = '$contrasena'";

//EJECUTAMOS LA SENTENCIA CON mysql_query

$ejecutar = mysqli_query($conectar,$sql);

//verificamos la ejecución

$fila = mysqli_num_rows($ejecutar);

if($fila>0){
    header("location:../terapeuta-citas.html");
}else{
    echo"<script> alert('Datos ingresados erróneos');
    window.location = '../login.html'
    </script>";
}

mysqli_free_result($ejecutar);
mysqli_close($conectar);

?>