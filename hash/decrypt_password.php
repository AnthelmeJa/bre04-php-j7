<?php
    $password = $_POST["password"];

    $passwordSecure = $_POST["passwordSecure"];
    
    
    $isPasswordCorrect = password_verify($password, $passwordSecure);

    if($isPasswordCorrect)
    {
        echo "Mot de passe correct";
    }
    else
    {
    	echo "Mot de passe erroné";
    }
    
?>