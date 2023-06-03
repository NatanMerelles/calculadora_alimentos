<?php
function list_alimentos() {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM calculadora.alimento");
	$sth->execute();
	return $sth->fetchAll();
}

function search_alimentos($search) {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM calculadora.alimento where nm_alimento ILIKE '%".$search."%'");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_alimento($nm_alimento, $caloria, $carboidrato, $proteina, $gordura) {
	global $conn;
	$sth = $conn->prepare("insert into calculadora.alimento (id_usuario, nm_alimento, caloria, carboidrato, proteina, gordura) values (1, '".$nm_alimento."', '".$caloria."','". $carboidrato."', '".$proteina."', '".$gordura."')");
	$sth->execute();
}

function delete_alimento($id_alimento) {
	global $conn;
	$sth = $conn->prepare("delete from calculadora.alimento where id_alimento = ".$id_alimento."");
	$sth->execute();
}

?>