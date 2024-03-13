<?php

$correctUsername = "user123";
$correctPassword = "password123";


$userUsername =  $_POST["usename"]; 
$userPassword = $_POST["password"]; 


if ($userUsername == $correctUsername && $userPassword == $correctPassword) {
    echo "Добро пожаловать!";
} 
else {
echo "Ошибка входа.";
}

?>