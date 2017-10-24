<?php   
session_start(); // Starting Session
if (isset($_POST['identity'])) {
    $username=$_POST['identity'];
    $password=$_POST['password'];
    $string = file_get_contents("json/UserLogin.json");
    $json_login = json_decode($string, true);
        foreach($json_login as $key){
            $identity = $key['Identity'];
            $pass = $key['Password'];
                if(($identity == $username)&&($pass == $password)){
                    $_SESSION['login_user']=$username;
                    header('Location: index.php');
                }
                else if(($identity != $username)and($pass != $password))
                {
                    header('Location: index.php');
                }
            }       
        }
   
?>