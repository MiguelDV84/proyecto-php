<?php

if(isset($_POST)){
    // Conectar a la Base de datos
require_once 'includes/connect.php';
 
// Iniciar Sesion
session_start();

// Recoger valores del formulario.
    $name =     isset ($_POST['name']) ? $_POST['name'] : false;
    $lastname = isset ($_POST['lastname']) ? $_POST['lastname'] : false;
    $email =    isset ($_POST['email']) ? $_POST['email'] : false;
    $password = isset ($_POST['password']) ? $_POST['password'] : false;

// Array de errores
    $errors = array();

// Validar Name
    if(!empty($name) && !is_numeric ($name) && !preg_match("/[0-9]/",$name)){
        $name_validate = true;
    } else {
        $name_validate = false;
        $errors['name'] = "El nombre no es valido";
        //var_dump($name_validate);
        echo $errors['name'];
    }
// Validar Lastname
    if(!empty($lastname) && !is_numeric ($lastname) && !preg_match("/[0-9]/",$lastname)){
        $lasname_validate = true;
    } else {
        $lasname_validate = false;
        $errors['lastname'] = "El apellido no es valido";
    }
// Validar email
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validate = true;
    } else {
        $email_validate = false;
        $errors['email'] = "El email no es valido";
    }

// Validar password
    if(!empty($password)){
        $password_validate = true;
    } else {
        $password_validate = false;
        $errors['password'] = "La contraseña no es valida";
    }

    $save_user = false;
    if(count($errors) == 0){
        $save_user = true;
 // CIFRAR CONTRASEÑA
        $password_code = password_hash($password, PASSWORD_BCRYPT, ['cost'=> 4]);

        //var_dump($password);
        //var_dump($password_code);

        //var_dump(password_verify($password, $password_code));
        //die;

 // INSERTAR USUARIO EN LA TABLA DE USUARIOS DE LA BBDD
    $sql = "INSERT INTO usuarios VALUES (null, $nombre, $apellidos, $email, $password, CURDATE() );";
    $query = mysqli_query($db, $sql);

    if ($sql){
        $_SESSION['registrado'] = "El registro se ha completado con exito";
    }else {
        $_SESSION['errors']['general'] = "Fallo al guardar el usuario nuevo";

    }

    }else{
      $_SESSION['errors'] = $errors;
      header('Location: index.php');
    }
}

header('Location: index.php');

?>