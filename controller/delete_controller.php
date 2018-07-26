<?php
require_once('../model/delete_model.php');

$file_name = glob('../images/' . $_POST["id"] . '.*');

unlink('../images/' . $file_name[0]);

delete_img($_POST['id']);

header('Location: ../view/list.php', true, 301);