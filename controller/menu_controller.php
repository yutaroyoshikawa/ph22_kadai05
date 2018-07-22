<?php

require_once('../model/db_controll.php');
require_once('../model/login_check_db.php');

function connect_session(){
    session_start();
    if($_SESSION['login'] != true){
        header('Location: ../view/login.php', true, 301);
    };

    $pdo = connect_db();
    $id = $_SESSION['id'];
    $user = exists_check($id, $pdo);

    return $user;
}