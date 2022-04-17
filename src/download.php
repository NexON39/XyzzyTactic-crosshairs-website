<?php
    require_once "../autoloader/autoload.php";
    $crosshairs = new crosshairs;
    $effects = new effects;

    if(isset($_GET['crosshair_id'])) {
        $crosshair_id = $_GET['crosshair_id'];
        if($crosshairs->downloadCrosshair($crosshair_id))
            header('Location: ../index.php');
        else
            http_response_code(404);
            die();
    }

    if(isset($_GET['effect_id'])) {
        $effect_id = $_GET['effect_id'];
        if($effects->downloadEffect($effect_id))
            header('Location: ../index.php');
        else
            http_response_code(404);
            die();
    }
?>