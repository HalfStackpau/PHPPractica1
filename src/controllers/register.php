<?php
    //render vista
   // si està definida la sessió
   require 'lib/render.php';
   $uname=$_SESSION['uname'] ?? '';
   echo render('register',['title'=>'asda '.$uname]);