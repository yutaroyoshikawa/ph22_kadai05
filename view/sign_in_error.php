<!DOCTYPE html>
<html>
<head>
	<title>ログインエラー</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="../controller/login_check.php" method="post">
		<p>ログインIDまたはパスワードを見直してください。</p>
		<label>ログインID：</label><input type="text" name="id" required><br>
		<label>パスワード：</label><input type="text" name="passwd" required><br>
		<button>ログイン</button><br>
	</form>
	<a href="../index.html">トップ</a>
</body>
</html>