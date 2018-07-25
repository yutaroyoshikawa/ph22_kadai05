<?php

require_once('../model/db_controll.php');
require_once('../model/sign_up_check_db.php');

function check_info() {
    $id = $_POST['id'];
    $passwd = password_hash($_POST['passwd'], PASSWORD_BCRYPT);
    $name = $_POST['name'];

    if(!(mb_strlen($id) >= 3 && mb_strlen($id) <= 10)){
        return "IDを確認してください。";
    }

    if(!(mb_strlen($passwd) >= 3 && mb_strlen($passwd) <= 10)){
        return "パスワードを確認してください。";
    }

    if(!(mb_strlen($name) >= 1 && mb_strlen($name) <= 20)){
        return "名前を確認してください。";
    }

    $pdo = connect_db();
    $user = exists_check($id, $pdo);

    // ユーザがいる
    if(!empty($user)){
        return "既に使用されているIDです。";
    }else{
        subscribe($id, $passwd, $name, $pdo);
        header('Location: ../view/login.php', true, 301);
    }
}


