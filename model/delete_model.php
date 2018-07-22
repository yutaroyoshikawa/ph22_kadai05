<?php
require_once('db_controll.php');

function delete_img($id){
    $pdo = connect_db();
    $stmt = $pdo->prepare('UPDATE image_file SET publish = 2 WHERE id = :id;');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}