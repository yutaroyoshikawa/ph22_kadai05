<?php
require_once('../controller/menu_controller.php');
$user = connect_session();
?>
<!DOCTYPE html>
<html>
<head>
	<title>メニュー</title>
	<meta charset="utf-8">
</head>
<body>
    <h1><?php echo $user['name'] ?></h1>
	<a href="upload.php">アップロード</a><br>
	<a href="list.php">一覧</a><br>
	<br>
	<a href="../controller/logout.php">ログアウト</a>
</body>
</html>