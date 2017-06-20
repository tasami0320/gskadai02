<?php
session_start();
if(!isset($_SESSION["chk_ssid"]) || $_SESSION["chk_ssid"]!=session_id()){
    echo "Login Error";
    exit();
}

//0.外部ファイル読み込み
include("functions.php");
sessChk();

//1.  DB接続します
$pdo = db_con();

//２．データ登録SQL作成
$stmt = $pdo->prepare("SELECT * FROM gs_bm_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);

}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    $view .= '<tr>';
    $view .= '<td>';
    $view .= $result["ユーザID"];
    $view .= '</td>';
    $view .= '<td>';
    $view .= $result["書籍名"];
    $view .= '</td>';
    $view .= '<td>';
    $view .= $result["作者"];
    $view .= '</td>';
    $view .= '<td>';
    $view .= $result["書籍URL"];
    $view .= '</td>';
    $view .= '<td>';
    $view .= $result["評価"];
    $view .= '</td>';
    $view .= '<td>';
    $view .= $result["書籍コメント"];
    $view .= '</td>';
    $view .= '</tr>';
  }

}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>オススメの本・アンケート結果！</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<script type="text/javascript" src="js/table.js"></script>
<style>div{padding: 10px;font-size:16px;}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="questionnaire.php">アンケート回答</a>
      </div>
      <div class="navbar-header">
      <a class="navbar-brand" href="select_own.php">アンケート回答一覧(自分)</a>
      </div>
      <div class="navbar-header">
      <a class="navbar-brand" href="logout.php">ログアウト</a>
      </div>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<p>★みんなのアンケート回答一覧です！アンケートに回答して書籍情報を共有しよう！★</p>
<div>
    <table class="table table-striped table-bordered table-hover table-autofilter">
    <thead>
    <tr><th class="table-filterable">ユーザID</th><th class="table-filterable">書籍名</th><th class="table-filterable">作者</th><th class="table-filterable">書籍URL</th><th class="table-filterable">評価</th><th>書籍コメント</th></tr>
    </thead>
    <?=$view?>
    </table>
</div>
<!-- Main[End] -->

</body>
</html>
