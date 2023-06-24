<?php
require_once("banco.php");
require_once("model.php");

$email = $_POST['usuario'];
$senha = $_POST['senha'];

$usuario = search_user($email, $senha);

echo $usuario;
var_dump($usuario);

// senha ok
if ($usuario) {
	session_start();
	$_SESSION["usuario"] = $usuario[0];
	header("Location: painel.php");
} else {
	// senha errada
	header("Location: sessao_form.php?error=1");
}
?>