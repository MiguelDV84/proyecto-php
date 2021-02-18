<?php
// Conexion
$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAME 'utf8'");

// INICIAR SESION

session_start();

?>