<?php

// INICIAR SESION Y CONEXION A DB
require_once 'includes/connect.php';

// RECOGER DATOS DEL FORMULARIO
if (isset($_POST)){
    $email = ($_POST['email']);
    $password = $_POST['password'];

// CONSULTA PARA COMPROBAR CREDENCIALES
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = mysqli_query($db, $sql);

if($login && mysqli_num_rows($login) == 1 ){
    $user = mysqli_fetch_assoc($login);
    var_dump($user);
    die;

// COMPROBAR LA CONTRASEÑA
    $password_code = password_hash($password, PASSWORD_BCRYPT, ['cost' => 4]);
    var_dump($password_code);
    die();
    }
} else{
    // MENSAJE DE ERROR
}





// UTILIZAR UNA SESSION PARA GUARDAR LOS DATOS DEL USUARIO LOGEADO.

// SI ALGO FALLA ENVIAR UNA SESSION CON EL FALLO

// REDIRIGIR AL index.php


?>