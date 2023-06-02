<?php
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];
// senha ok
if ($senha == "123") {
	session_start();
	$_SESSION["usuario"] = $usuario;
	header("Location: painel.php");
} else {
	// senha errada
	header("Location: sessao_form.php");
}
?>