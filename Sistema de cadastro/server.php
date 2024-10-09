<?php

$servername = "localhost";
$username = "root";
$password = 'P@$$w0rd';
$dbname = "produtos";


$conn = new mysqli($servername, $username, $password, $dbname);

if($conn->connect_error){
    die("Coneção falhou: ". $conn->connect_error);
}




 