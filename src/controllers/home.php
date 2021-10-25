<?php
    //render vista
   // si està definida la sessió
   require 'lib/render.php';
   $uname=$_SESSION['uname'] ?? '';
   echo render('home',['title'=>'asda '.$uname]);