<?php
    function register($db,$email,$pass, $rol):bool{
    
        try{   
            //preparem sentència
            $stmt=$db->prepare('INSERT INTO user (email,password, rol) VALUES(?,?,?)');
            $stmt->bindParam(1,$email);
            $stmt->bindParam(2,$pass);
            $stmt->bindParam(3,$rol);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }

            
            
        }catch(PDOException $e){
            return false;
        }
    }
    function login($db,$email,$pass):bool{
        try{   
            //preparem sentència
            $stmt=$db->prepare("SELECT * FROM user WHERE email=? AND password=?");
            $stmt->execute([$email,$pass]);
            $row = $stmt->fetchAll();
            if($row !== null){  
                if($email === $row[0]['email'] && $pass === $row[0]['password']){
                    $_SESSION['login']=$email;
                    setcookie('login','true', time()+(86400*30),"/");
                    setcookie('email', $email, time()+(86400*30),"/");
                    setcookie('rol', $row[0]['rol'], time()+(86400*30),"/");
                    return true;
                }else{
                    return false;
                }
            }else{
                return false;
            }
            
        }catch(PDOException $e){
            return false;
        }
    }






?>