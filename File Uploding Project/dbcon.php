<?php

$server ="localhost";
$user ="root";
$password ="";
$db ="test";

$conn = mysqli_connect($server, $user, $password, $db);

if($conn){
    echo "Connection Successfull";
    
}else{
    echo "No connection";
}
