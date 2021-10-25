<?php
    require "src/db/db.php";
    require "./config.php";
    require './lib/conn.php';
    $database = connectMysql($dsn,$dbuser, $dbpasswd);
    $email = filter_input(INPUT_POST,'email');
    $password = filter_input(INPUT_POST,'password');
    if(login($database, $email, $password)){
       
        header('location:?url=dashboard');
        
    }else{
        echo $email;
    
    }
    




?>