<?php
require_once("banco.php");
require_once("model.php");
var_dump($_POST);

edita_alimento($_POST['id_alimento'], $_POST['nm_alimento'], $_POST['caloria'], $_POST['carboidrato'], $_POST['proteina'], $_POST['gordura']);

echo 'Alimento editado com Sucesso!';

header("Location: painel.php");
?>