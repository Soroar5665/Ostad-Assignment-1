<?php

define("USERNAME", "Soroar");
define("PASSWORD", "12345");

echo "Enter Username: ";
$inputUsername = readline();

echo "Enter Password: ";
$inputPassword = readline();

if($inputUsername === USERNAME && $inputPassword === PASSWORD){
    echo "Log in successful!";
}else{
    echo "Invalid username or password";
}

?>