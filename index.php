<?php
    require './config.php';
    require APP.'/src/router.php';
    session_start();
    //?url=login
    $controller = getRoute();
    require APP.'/src/controllers/'.$controller.'.php';


?>