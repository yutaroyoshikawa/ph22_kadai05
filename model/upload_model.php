<?php
require_once('db_controll.php');

function count_db(){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT COUNT(*) AS "img_num" FROM image_file;');
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);
    $pdo = null;
    return $count;
};

function subscribe_info($account_id, $title, $name, $publish){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT id FROM accounts WHERE login_id = :account_id;');
    $stmt->bindParam(':account_id', $account_id);
    $stmt->execute();
    $id = $stmt->fetch(PDO::FETCH_ASSOC);

    $stmt = $pdo->prepare('INSERT INTO image_file(account_id, title, filename, publish) VALUES (:account_id, :title, :filename, :publish);');
    $stmt->bindParam(':account_id', $id['id']);
    $stmt->bindParam(':title', $title);
    $stmt->bindParam(':filename', $name);
    $stmt->bindParam(':publish', $publish);
    $stmt->execute();
    $pdo = null;
};

function check_autoinc($table_name){
    $pdo = connect_db();
    $stmt = $pdo->prepare('SELECT auto_increment FROM information_schema.tables WHERE table_name = :table_name;');
    $stmt->bindParam(':table_name', $table_name);
    $stmt->execute();
    $id = $stmt->fetch(PDO::FETCH_ASSOC);
    $pdo = null;

    return $id;
};