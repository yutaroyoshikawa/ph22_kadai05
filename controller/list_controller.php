<?php
require_once('../model/list_model.php');
session_start();
function init(){
    if($_SESSION['login'] != true){
        header('Location: ../view/login.php', true, 301);
    };
    $list = "";
    $list = get_list($_SESSION['id']);

    return $list;
}
