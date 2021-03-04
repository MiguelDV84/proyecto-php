<?php 

// INICIAR SESION Y CONEXION A DB
require_once 'includes/connect.php';

// RECOGER DATOS DEL FORMULARIO
if (isset($_POST)){
    $email = ($_POST['email']);
    $password = ($_POST['password']);

// CONSULTA PARA COMPROBAR CREDENCIALES
$sql = "SELECT * FROM usuarios WHERE email = '$email'";
$login = mysqli_query($db, $sql);

if($login && mysqli_num_rows($login) == 1 ){
    $user = mysqli_fetch_assoc($login);
// COMPROBAR LA CONTRASEÑA
   $verify = password_verify($password, $user['password']);
   var_dump($verify);
   die;
   
    if($verify){
    // UTILIZAR UNA SESSION PARA GUARDAR LOS DATOS DEL USUARIO LOGEADO. 
        $_SESSION['user'] = $user;  

        if(isset($_SESSION['error_login'])){
            session_unset();
        }
    }else{
        // Si algo falla enviar una sesion con el fallo
        $_SESSION['error_login'] = "Login incorrecto";
    }
    }else{
        // Mensaje de error
        $_SESSION['error_login'] = "Login incorrecto";
    }   
}

// redirigir
header ('Location: index.php')
?>