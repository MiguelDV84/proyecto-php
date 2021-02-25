<?php
function mostrarError($errors, $campo){
    $alert= '';
    if(isset($errors[$campo]) && !empty($campo)){
        $alert = "<div class='alert alert-error'>".$errors[$campo].'</div>';
    }
    return $alert;
}

function borrarErrors(){
    $result = false;

    if(isset($_SESSION['errors'])){
        $_SESSION['errors'] = null;
        $result = session_unset();
    }

    if(isset($_SESSION['registrado'])){
    $_SESSION['registrado'] = null;
    $result = session_unset();

    return $result;
    }
}
?>