<?php
//1. POSTデータ取得
$userid = $_POST["userid"];
$name = $_POST["name"];
$arthor = $_POST["arthor"];
$url = $_POST["url"];
$eva = $_POST["eva"];
$comment = $_POST["comment"];



//2. DB接続します
try {
  $pdo = new PDO('mysql:dbname=gs_db02;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('DbConnectError:'.$e->getMessage());
}


//３．データ登録SQL作成
$stmt = $pdo->prepare("INSERT INTO gs_bm_table(id, ユーザID, 書籍名, 作者, 書籍URL, 評価, 書籍コメント, 登録日時 )VALUES(NULL, :userid, :name, :arthor, :url, :eva, :comment, sysdate())");
$stmt->bindValue(':userid', $userid, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':name', $name, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':arthor', $arthor, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':url', $url, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':eva', $eva, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);  //Integer（数値の場合 PDO::PARAM_INT)
$status = $stmt->execute();  //実行、エラーの場合、falseを返す


//４．データ登録処理後
if($status==false){
  //SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
  $error = $stmt->errorInfo();
  exit("QueryError:".$error[2]);
}else{
  //５．index.phpへリダイレクト
  header("Location: select.php"); //半角スペース必須
  exit;

}
?>
