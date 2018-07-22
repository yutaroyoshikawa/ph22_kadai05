<?php

function connect_db(){
	 try {
     $pdo = new PDO('mysql:host=localhost;dbname=ph22_kadai05_ih12b335_16;charset=utf8', 'root', 'root',
         array(PDO::ATTR_EMULATE_PREPARES => false));
     $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	 } catch (PDOException $e) {
	     exit('データベース接続失敗。'.$e->getMessage());
	 }

	 return $pdo;
}