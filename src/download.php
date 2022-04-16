<?php
    require_once "../autoloader/autoload.php";
    $crosshairs = new crosshairs;
    $crosshair_id = $_GET['crosshair_id'];
    if($crosshairs->downloadCrosshair($crosshair_id))
        header('Location: ../index.php');
    else
        http_response_code(404);
        die();
?>