<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "formulario";

// Crear conexión
$conexion = new mysqli($servername, $username, $password, $dbname);

if ($conexion->connect_errno){
    die("conexion Fallida" . $conexion->connect_errno);
} else{
    echo "conectado";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="ff.css">
</head>
<body>
    <form action="#" name="formulario" method="post">
        <input type="text" name="nombre" placeholder="nombre">
        <input type="email" name="email" placeholder="email">
        <input type="text" name="mensaje" placeholder="mensaje">

        <input type="submit" name="enviar" >
        <input type="reset">
    </form>
</body>
</html>

<?php

if(isset($_POST['enviar'])){

    $nombre= $_POST['nombre'];
    $email= $_POST['email'];
    $mensaje= $_POST['mensaje'];

    $insertarDatos = "INSERT INTO maestros VALUES('$nombre','$email','$mensaje','')";

    $ejecutarInsertar = mysqli_query ($conexion, $insertarDatos);
}
?>