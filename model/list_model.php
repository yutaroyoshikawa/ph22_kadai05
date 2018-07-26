<?php
require_once('db_controll.php');

function get_list(){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT * FROM image_file;');
    $stmt->execute();
    $list = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $list;
}

function get_id($id){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT id FROM accounts WHERE login_id = :account_id;');
    $stmt->bindParam(':account_id', $id);
    $stmt->execute();
    $id = $stmt->fetch(PDO::FETCH_ASSOC);

    return $id['id'];
}

