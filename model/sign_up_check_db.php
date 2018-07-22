<?php 

function exists_check($id, $db){
	$user = '';
	$stmt = $db->prepare('SELECT * FROM accounts WHERE login_id = :id');
	$stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
};

function subscribe($id, $passwd, $name, $db){
	$stmt = $db->prepare('INSERT INTO accounts(login_id, password_hash, name) VALUES (:id, :passwd, :name);');
	$stmt->bindParam(':id', $id);
	$stmt->bindParam(':passwd', $passwd);
	$stmt->bindParam(':name', $name);
    $stmt->execute();
};