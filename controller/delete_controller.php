<?php
require_once('../model/delete_model.php');

delete_img($_POST['id']);

header('Location: ../view/list.php', true, 301);