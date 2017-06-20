<?php
//1. POSTデータ取得
$id = $_POST["id"];
$userid = $_POST["userid"];
$name = $_POST["name"];
$arthor = $_POST["arthor"];
$url = $_POST["url"];
$eva = $_POST["eva"];
$comment = $_POST["comment"];


//2.DB接続など
try {
  $pdo = new PDO('mysql:dbname=gs_db02;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}


//3.UPDATE gs_an_table SET ....; で更新(bindValue)
//　基本的にinsert.phpの処理の流れです。

$stmt = $pdo->prepare("UPDATE gs_bm_table SET ユーザID=:userid,書籍名=:name,作者=:arthor,書籍URL=:url,評価=:eva,書籍コメント=:comment WHERE id=:id");
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$stmt->bindValue(':userid', $userid, PDO::PARAM_STR);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':arthor', $arthor, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':eva', $eva, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$status = $stmt->execute();

$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
    header("Location: select_own.php");
    exit;
  }



?>
