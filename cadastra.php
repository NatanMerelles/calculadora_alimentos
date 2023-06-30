<?php
require_once("banco.php");
require_once("model.php");
require_once("helpers.php");

$id = insert_alimento($_POST['id_usuario'], $_POST['nm_alimento'], $_POST['caloria'], $_POST['carboidrato'], $_POST['proteina'], $_POST['gordura'], $link);
$file = upload_file($_FILES["fileToUpload"], $id);

if($file){
    edita_alimento($_POST['id_usuario'], $_POST['nm_alimento'], $_POST['caloria'], $_POST['carboidrato'], $_POST['proteina'], $_POST['gordura'], $link);
}

echo 'Alimento adicionado com Sucesso!';

header("Location: painel.php");
?>