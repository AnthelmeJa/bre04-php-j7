<?php


$password = $_POST["password"];

$passwordSecure = password_hash($password, PASSWORD_DEFAULT);

echo $passwordSecure."<br>";

echo $password;

?>