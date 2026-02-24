<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "spotify_clone";

$conn = new mysqli($host, $user, $pass, $db);

if($conn->connect_error){
    die("Erro de conexão");
}

session_start();
?>
