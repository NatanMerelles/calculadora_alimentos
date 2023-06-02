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

function insert_movel($nome_movel, $descricao, $id_linha, $id_modelo, $id_cor) {
	global $conn;
	$sth = $conn->prepare("insert into moveis (nome, descricao, id_linha, id_modelo) values ('$nome_movel', '$descricao', $id_linha, $id_modelo)");
	$sth->execute();
}

function excluir_movel($id_movel) {
	global $conn;
	$sth = $conn->prepare("delete from moveis where id_movel = $id_movel");
	$sth->execute();
}

?>