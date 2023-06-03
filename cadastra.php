<?php
require_once("banco.php");
require_once("model.php");
insert_alimento($_POST['nm_alimento'], $_POST['caloria'], $_POST['carboidrato'], $_POST['proteina'], $_POST['gordura']);

echo 'Alimento adicionado com Sucesso!';

header("Location: painel.php");
?>