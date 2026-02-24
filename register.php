<?php
include "config.php";

if(isset($_POST['register'])){

$username = $_POST['username'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$sql = "INSERT INTO users(username,email,password)
VALUES('$username','$email','$password')";

$conn->query($sql);

echo "Conta criada com sucesso <a href='login.php'>Login</a>";

}
?>

<link rel="stylesheet" href="style.css">

<h2>Cadastro</h2>

<form method="POST">

<input type="text" name="username" placeholder="Usuário" required>

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Senha" required>

<button name="register">Cadastrar</button>

</form>

<a href="login.php">Já tem conta? Login</a>
