<?php
require_once('db_controll.php');

function delete_img($id){
    $pdo = connect_db();
    $stmt = $pdo->prepare('DELETE FROM image_file WHERE id = :id;');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}