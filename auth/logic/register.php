<?php
    require "../connexion.php";
    
    if(isset($_POST["first_name"]) && isset($_POST["last_name"]) && isset($_POST["email"]) && isset($_POST["password"])){
        $user_first_name = $_POST["first_name"];
        $user_last_name =$_POST["last_name"];
        $user_email = $_POST["email"];
        $user_password = password_hash($_POST["password"], PASSWORD_DEFAULT);
        
        $query = $db->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)");

        $parameters = [
            'first_name' =>$user_first_name ,
            'last_name' => $user_last_name,
            'email' => $user_email,
            'password' => $user_password
            
        ];
        
        $query->execute($parameters);
    }
    
    header('Location: ../index.php?route=home.phtml');;
    exit();
?>