<?php
require_once('../model/publish_model.php');

publish_db($_POST['id'], $_POST['publish']);

header('Location: ../view/list.php', true, 301);