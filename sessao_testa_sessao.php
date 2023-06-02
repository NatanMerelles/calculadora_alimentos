<?php
	// inicializa sessao
	session_start();
	// algum teste para verificar se elemento de $_SESSION existe
	if (!count($_SESSION)) {
		header("Location: sessao_form.php");
	}
?>
