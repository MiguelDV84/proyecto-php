<?php
function mostrarError($errors, $campo){
    $alert= '';
    if(isset($errors[$campo]) && !empty($campo)){
        $alert = "<div class='alert alert-error'>".$errors[$campo].'</div>';
    }
    return $alert;
}

function borrarErrors(){
    $_SESSION['errors'] = null;
    $result = session_unset();

    return $result;
}
?>