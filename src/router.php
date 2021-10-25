<?php
    
    function getRoute():string
    {
        $login = $_COOKIE['login'];
        if(isset($_REQUEST['url'])){
             $url=$_REQUEST['url'];
        }else{
            $url="home";
        }
           
        switch ($url){
            case 'login': 
                if($login === "true"){
                    return "perfil";
                }else{
                    return "login";
                } 
            case 'register': 
                return 'register';
            case 'registerAction': 
                return "registerAction";
            case 'loginAction': 
                return "loginAction";
            case 'logout': 
                return "logout";
            case 'dashboard':
                if($login === "true"){
                    return "dashboard";
                }else{
                    return "login";
                }
                
            case 'perfil': 
                if($login === "true"){
                    return "perfil";
                }else{
                    return "login";
                }
            case 'resetAction':
                return "resetAction";
            default:
                return 'home';
        }
            
    }

?>