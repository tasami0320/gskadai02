<!DOCTYPE html>
<html lang="ja">
<head>
	<meta charset="utf-8">
	<meta name="keywords" content=",,,">
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>login</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
	<link rel="stylesheet" type="text/css" href="css/style-login.css"/>
    <link rel="stylesheet" type="text/css" href="css/sweetalert.css">
    <script type="text/javascript" src="js/sweetalert.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script type="text/javascript">
    $(function(){
        swal({
        title: "登録完了!",
        text: "ログインが可能です！さあ、どうぞ！",
        type: "success",
        });
    });
    </script>
	<!-- あらかじめcssを読み込んでいるので設定しなくてOK-->
</head>
<body>
    
<div class="contact">
    <p class="Contact-word">LOGIN</p>
    
    <form class="Contact-form" method="post" action="login_act.php">
        <table>
            <tbody>
            <tr>
                <th>ユーザID</th>
                <td><input type="text" name="lid" value="" class="input"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="lpw" value="" class="input"></td>
            </tbody>
        </table>
            
            <P class="submit"><input type="submit" value="login!"></P>
    </form>

    <button class="button"><a class="navbar-footer" href="entry1.php">会員登録</a></button><br>
    <button class="button"><a class="navbar-footer" href="select_free.php">会員登録せずにアンケート結果を閲覧</a></button>

</div>
    

    
<!-- この上に記述 -->
</body>
</html>
