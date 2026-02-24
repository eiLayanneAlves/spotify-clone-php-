<?php
include "config.php";

if(!isset($_SESSION['user'])){
header("Location: login.php");
}
?>

<link rel="stylesheet" href="style.css">

<h1>Bem-vindo ao Spotify Clone</h1>

<p>Olá, <?php echo $_SESSION['user']; ?></p>

<a href="logout.php">Sair</a>
