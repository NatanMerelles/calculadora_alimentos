<?php
require_once("banco.php");
require_once("model.php");
delete_alimento($_GET['alimento_id']);

echo 'Alimento excluido com Sucesso!';

header("Location: painel.php");
?>