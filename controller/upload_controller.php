<?php
require_once('../model/upload_model.php');
session_start();
if($_SESSION['login'] != true){
    header('Location: ../view/login.php', true, 301);
}

$title = $_POST['title'];
$file_name = $_POST['name'];
$publish = $_POST['publish'];
$auto_inc = check_autoinc('image_file');
//一時ファイルができているか（アップロードされているか）チェック
if(is_uploaded_file($_FILES['file']['tmp_name'])){

    //拡張子判断
    $file_type = array_search(
        mime_content_type($_FILES['file']['tmp_name']),
        array(
            'gif' => 'image/gif',
            'jpg' => 'image/jpeg',
            'png' => 'image/png',
        ),
        true
    );

    //一時ファイルを保存ファイルにコピーできたか
    if(move_uploaded_file($_FILES['file']['tmp_name'],"../images/" . $auto_inc['auto_increment'] . "." .$file_type)){

        subscribe_info($_SESSION['id'], $title, $file_name, $publish);
        header('Location: ../view/menu.php', true, 301);

    }else{

        //コピーに失敗
        echo "error while saving.";
    }

}else{

    //そもそもファイルが来ていない。
    echo "file not uploaded.";
}