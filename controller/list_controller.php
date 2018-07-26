<?php
require_once('../model/list_model.php');
session_start();
function init(){
    if($_SESSION['login'] != true){
        header('Location: ../view/login.php', true, 301);
    };
    $list = "";
    $list = get_list();

    return $list;
}

function id_db(){
    $id = get_id($_SESSION['id']);
    return $id;
}

function get_filename($id){
    $image = glob('../images/' . $id . '.*');
    return $image[0];
}