<?php
require_once("banco.php");
require_once("model.php");
require_once("helpers.php");

$file = "";

if($_FILES["fileToUpload"]["name"]){
    $file = upload_file($_FILES["fileToUpload"], $_POST['id_alimento']);
}

edita_alimento($_POST['id_alimento'], $_POST['nm_alimento'], $_POST['caloria'], $_POST['carboidrato'], $_POST['proteina'], $_POST['gordura'], $file);

echo 'Alimento editado com Sucesso!';

header("Location: painel.php");
?>