<?php
require_once('db_controll.php');

function get_list($account_id){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT id FROM accounts WHERE login_id = :account_id;');
    $stmt->bindParam(':account_id', $account_id);
    $stmt->execute();
    $id = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('SELECT * FROM image_file WHERE account_id = :id AND publish <> 2');
    $stmt->bindParam(':id', $id['id']);
    $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}


