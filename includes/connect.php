<?php
// Conexion
$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAME 'utf8'");

if($db){
    echo "La conexion se ha realizado.";
} else{
    echo "No se pudo conectar a la base de datos.";
}

?>