<?php
// Conexion
$server = "localhost";
$username = "root";
$password = "";
$database = "blog";

$db = mysqli_connect($server, $username, $password, $database);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

session_start();

?>