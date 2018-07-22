<!DOCTYPE html>
<html>
<head>
	<title>アップロード</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="../controller/upload_controller.php" method="post" enctype="multipart/form-data">
		<label>タイトル：</label><input type="text" name="title" required><br>
		<br>
		<label>ファイル名：</label><input type="text" name="name" required><input type="file" name="file" accept="image/*" required><br>
        <input type="hidden" name="publish" value="0">
        <label>非公開：</label><input type="checkbox" name="publish" value="1"><br>
		<button>アップロード</button><br>
	</form>
	<a href="menu.php">メニュー</a>
</body>
</html>