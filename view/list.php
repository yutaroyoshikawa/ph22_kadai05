<?php
require_once('../controller/list_controller.php');
$list = init();
$id = id_db();
?>
<!DOCTYPE html>
<html>
<head>
	<title>一覧</title>
	<meta charset="utf-8">
</head>
<body>
<?php
if(!empty($list)){
    foreach($list as $value){
        if($value['account_id'] == $id){
            echo '<img src="../images/' . get_filename($value['id']) . '" alt="'. $value['id'] .'"><br>';
//            echo '<h3>' . $value['title'] . '</h3><br>';
            echo '<h4>' . $value['filename'] . '</h4><br>';
            if($value['publish'] == 0) {
                echo '<form action="../controller/publish_controller.php" method="post"><input type="hidden" name="publish" value="1"><input type="hidden" name="id" value="' . $value['id'] . '"><button>非公開にする</button></form><br>';
                echo '<form action="../controller/delete_controller.php" method="post"><input type="hidden" name="id" value="' . $value['id'] . '"><button>削除</button></form><br>';
            }else{
                echo '<form action="../controller/publish_controller.php" method="post"><input type="hidden" name="publish" value="0"><input type="hidden" name="id" value="' . $value['id'] . '"><button>公開する</button></form><br>';
                echo '<form action="../controller/delete_controller.php" method="post"><input type="hidden" name="id" value="' . $value['id'] . '"><button>削除</button></form><br>';
            }
        }else {
            if ($value['publish'] == 0) {
                echo '<img src="../images/' . get_filename($value['id']) . '" alt="' . $value['id'] . '"><br>';
//                echo '<h3>' . $value['title'] . '</h3><br>';
                echo '<h4>' . $value['filename'] . '</h4><br>';
            }
        }
    }
}else{
    echo 'アップロードされた画像がありません。<br>';
}

?>

	<a href="menu.php">メニュー</a>
</body>
</html>