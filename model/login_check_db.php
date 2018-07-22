<?php

function exists_check($id, $db){
    $user = '';
    $stmt = $db->prepare('SELECT * FROM accounts WHERE login_id = :id');
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    return $user;
};