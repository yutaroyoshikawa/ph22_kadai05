<?php

require_once('../model/db_controll.php');
require_once('../model/sign_up_check_db.php');

$id = $_POST['id'];
$passwd = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
// $passwd = 'hoge';
$name = $_POST['name'];

$pdo = connect_db();

$user = exists_check($id, $pdo);
print_r($user);

// ユーザがいる
if(!empty($user)){
    header('Location: ../view/sign_up_error.php', true, 301);
}else{
	subscribe($id, $passwd, $name, $pdo);
	header('Location: ../view/login.php', true, 301);
}
