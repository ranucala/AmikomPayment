<?php

        $username =$_POST['identity'];
        $password =$_POST['password'];
        $log = false;
        $string = file_get_contents("json/UserLogin.json");
        $json_login = json_decode($string, true);

        
        foreach($json_login as $key){
            $identity = $key['Identity'];
            $pass = $key['Password'];
        if(($identity == $username)&&($pass == $password)){
            echo "logged in";
            $log = true;
            break;
            }
        }
?>