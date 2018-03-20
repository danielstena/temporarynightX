<?php
include "data.php";
  function login($users, $username, $password){
        
    #For loop som sedan kollar informationen användaren skrivit in mot informationen i $users arrayen
    if(isset($username)){
        for ($i = 0; $i < count($users); $i++){
            if($username == $users[$i]["username"] and $password == $users[$i]["password"]){
                $_SESSION["fullname"] = $users[$i]["fullname"];
                echo "<script>alert('Hello ". $_SESSION["fullname"] ."! Your IP adress is: ".$_SERVER['REMOTE_ADDR']." ');</script>";
                
                $_SESSION["loggedin"] = true; 
                
                break;
            }
        }
    }
}