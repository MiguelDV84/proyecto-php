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


// COMPROBAR LA CONTRASEÑA
   $verify = password_verify($password, $user['password']);
    if($verify){
    // UTILIZAR UNA SESSION PARA GUARDAR LOS DATOS DEL USUARIO LOGEADO.
        $_SESSION['user'] = $user;
        session_unset();
        
    }
}else{
    // SI ALGO FALLA ENVIAR UNA SESSION CON EL FALLO
    $_SESSION['error_login'] = "Login incorrecto";
    }
}
// REDIRIGIR AL index.php
header ('Location: index.php');











?>