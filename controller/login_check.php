<?php

require_once('../model/db_controll.php');
require_once('../model/login_check_db.php');

session_start();

$id = $_POST['id'];
$passwd = $_POST['passwd'];

$pdo = connect_db();

$user = exists_check($id, $pdo);

// ユーザがいない
if(empty($user)){
    header('Location: ../view/sign_in_error.php', true, 301);
}else if(!password_verify($passwd, $user['password_hash'])){
    // パスワードチェック
    header('Location: ../view/sign_in_error.php', true, 301);
}else{
    // ログイン
    session_regenerate_id(true);
    $_SESSION['login'] = true;
    $_SESSION['id'] = $id;
    header('Location: ../view/menu.php', true, 301);
}
