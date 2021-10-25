<?php
    setcookie('login','false', time()+(86400*30),"/");
    header('location:?url=login');



?>