<?php
    session_start();
    
    
    $pseudo = $_SESSION["user"];
   
   if(isset($pseudo)){
       echo "Bienvenue " . $pseudo;
   }else{
       echo "Bienvenue invité";
   }


?>