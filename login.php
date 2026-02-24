<?php
include "config.php";

if(isset($_POST['login'])){

$email = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE email='$email'";

$result = $conn->query($sql);

if($result->num_rows > 0){

$user = $result->fetch_assoc();

if(password_verify($password, $user['password'])){

$_SESSION['user'] = $user['username'];

header("Location: dashboard.php");

}else{
echo "Senha incorreta";
}

}else{
echo "Usuário não encontrado";
}

}
?>

<link rel="stylesheet" href="style.css">

<h2>Login</h2>

<form method="POST">

<input type="email" name="email" placeholder="Email" required>

<input type="password" name="password" placeholder="Senha" required>

<button name="login">Entrar</button>

</form>

<a href="register.php">Criar conta</a>
