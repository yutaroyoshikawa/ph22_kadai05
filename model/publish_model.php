<?php
require_once("db_controll.php");

function publish_db($id, $publish_param){
    $pdo = connect_db();
    $stmt = $pdo->prepare('UPDATE image_file SET publish = :publish_param WHERE id = :id');
    $stmt->bindParam(':publish_param', $publish_param);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $count = $stmt->fetch(PDO::FETCH_ASSOC);
    $pdo = null;
    return $count;
}