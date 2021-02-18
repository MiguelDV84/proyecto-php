<?php
function mostrarError($errors, $campo){
    $alert = '';
    if(isset($errors[$campo]) && !empty($campo)){
        $alert = "<div class='alert-error>".$errors[$campo].'</div>';
    }

    return $alert;

}

?>