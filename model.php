<?php
function list_alimentos() {
	global $conn;
	$sth = $conn->prepare("
		SELECT * FROM calculadora.alimento a, calculadora.usuario b
		where a.id_usuario = b.id_usuario
	");
	$sth->execute();
	return $sth->fetchAll();
}

function search_alimentos($search) {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM calculadora.alimento where nm_alimento ILIKE '%".$search."%'");
	$sth->execute();
	return $sth->fetchAll();
}

function search_alimento_by_id($id_alimento) {
	global $conn;
	$sth = $conn->prepare("SELECT * FROM calculadora.alimento where id_alimento = ".$id_alimento."");
	$sth->execute();
	return $sth->fetchAll();
}

function insert_alimento($id_usuario, $nm_alimento, $caloria, $carboidrato, $proteina, $gordura) {
	global $conn;
	$sth = $conn->prepare("
	insert into calculadora.alimento (
		id_usuario,
		nm_alimento,
		caloria,
		carboidrato,
		proteina,
		gordura
	) values (
		'".$id_usuario."',
		'".$nm_alimento."',
		'".$caloria."',
		'". $carboidrato."',
		'".$proteina."',
		'".$gordura."'
	)
	");
	$sth->execute();
}

function edita_alimento($id_alimento, $nm_alimento, $caloria, $carboidrato, $proteina, $gordura) {
	global $conn;
	$sth = $conn->prepare("
	update 
		calculadora.alimento
	set 
		nm_alimento = '".$nm_alimento."',
		caloria = '".$caloria."',
		carboidrato = '".$carboidrato."',
		proteina = '".$proteina."',
		gordura = '".$gordura."'
	where
		id_alimento = ".$id_alimento."
	  ");
	$sth->execute();
}

function delete_alimento($id_alimento) {
	global $conn;
	$sth = $conn->prepare("delete from calculadora.alimento where id_alimento = ".$id_alimento."");
	$sth->execute();
}

function search_user($email, $password){
	global $conn;
	$sth = $conn->prepare("SELECT * FROM calculadora.usuario where email = '".$email."' and senha = '".MD5($password)."'");
	$sth->execute();
	return $sth->fetchAll();
}

?>