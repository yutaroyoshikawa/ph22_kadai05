<!DOCTYPE html>
<html>
<head>
	<title>新規登録</title>
	<meta charset="utf-8">
</head>
<body>
	<form action="./sign_up_error.php" method="post">
		<label>ログインID：</label><input type="text" name="id" placeholder="半角英数３〜１０文字" required><br>
		<label>パスワード：</label><input type="text" name="passwd" placeholder="半角英数３〜１０文字" required><br>
		<label>名前：</label><input type="text" name="name" placeholder="１〜２０文字" required><br>
		<button>登録</button>
	</form>
	<a href="../index.html">トップ</a>
</body>
</html>