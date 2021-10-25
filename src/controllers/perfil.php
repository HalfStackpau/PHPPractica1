<?php
    //render vista
   // si està definida la sessió
   require 'lib/render.php';
   $email = $_COOKIE['email'];
   $uname=$_SESSION['uname'] ?? '';
   echo render('perfil',['title'=>'asda '.$uname]);
   echo $_COOKIE['email'];
   echo "<p>Bienvenido</p>";
   echo "<p>$email</p>";
?>