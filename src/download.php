<?php
// Author: NexON39
// Discord: NexON39#5665

    require_once "../autoloader/autoload.php";
    $crosshairs = new crosshairs;
    $effects = new effects;

    if(isset($_POST['crosshair_id'])) {
        $crosshair_id = $_POST['crosshair_id'];
        $crosshairs->downloadCrosshair($crosshair_id);
    }

    if(isset($_POST['effect_id'])) {
        $effect_id = $_POST['effect_id'];
        $effects->downloadEffect($effect_id);
    }
?>