<?php
    require "src/db/db.php";
    require "./config.php";
    require './lib/conn.php';
    $database = connectMysql($dsn,$dbuser, $dbpasswd);
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    $rol = filter_input(INPUT_POST,'rol');
    if(register($database, $email, $password, $rol)){
        header('location:?url=dashboard');
        
    }else{
        echo $email;
        echo $password;
    }
    




?>