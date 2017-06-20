<?php
session_start();

$lid = $_SESSION["lid"];

?>


<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>書籍アンケート</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style.css"/>
	<!-- あらかじめcssを読み込んでいるので設定しなくてOK-->
</head>
<body>
    
<div class="contact">
    <p class="Contact-word">書籍アンケート</p>
    
    <form class="Contact-form" method="post" action="insert.php">
        <table>
            <tbody>
            <tr>
                <th>ユーザID</th>
                <td><input type="text" name="userid" value="<?=$lid?>" class="input"></td>
            </tr>
            <tr>
                <th>書籍名</th>
                <td><input type="text" name="name" value="" class="input"></td>
            </tr>
            <tr>   
                <th>作者</th>
                <td><input type="text" name="arthor" value="" class="input"></td>
            </tr>
            <tr> 
                <th>書籍URL</th>
                <td><input type="text" name="url" value="" class="input"></td>
            </tr>
            <tr> 
                <th>自己評価</th>
                <td>
                    <select name="eva"  class="input">
                        <option value="◎">◎</option>
                        <option value="◯">◯</option>
                        <option value="△">△</option>
                        <option value="×">×</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th>コメント</th>
                <td><textarea name="comment" rows="10" cols="40"></textarea></td>
            </tr>
            </tbody>
        </table>
            
            <P class="submit"><input type="submit" value="回答！"></P>
    </form>
    
    <div class="navbar-footer"><a class="navbar" href="select.php">＜アンケート回答一覧へ戻る＞</a></div>

</div>
    

    
<!-- この上に記述 -->
</body>
</html>
