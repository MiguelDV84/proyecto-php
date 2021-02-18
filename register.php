<?php
session_start();
if(isset($_POST))
{
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
        // INSERTAR USUARIO EN LA TABLA DE USUARIOS DE LA BBDD


    }else{
       $_SESSION['errors'] = $errors;
       header('Location: index.php');
    }
}

?>