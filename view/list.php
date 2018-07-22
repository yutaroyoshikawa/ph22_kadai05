<?php
require_once('../controller/list_controller.php');
$list = '';
$list = init();
?>
<!DOCTYPE html>
<html>
<head>
	<title>一覧</title>
	<meta charset="utf-8">
</head>
<body>
<?php
//print_r($list);
if(!empty($list)){
    foreach($list as $value){
        echo '<img src="../images/'. $value['id'] .'.jpg" alt="'. $value['filename'] .'"><br>';
        echo $value['title'] . '<br>';
        echo $value['filename'] . '<br>';
        echo '<form action="../controller/delete_controller.php" method="post"><input type="hidden" name="id" value="'. $value['id'] .'"><button>削除</button></form><br>';
    }
}else{
    echo 'アップロードされた画像がありません。<br>';
}

?>

	<a href="menu.php">メニュー</a>
</body>
</html>