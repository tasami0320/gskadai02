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
        title: "Error!",
        text: "未入力箇所があります！お手数ですが再度入力願います。",
        type: "error",
        confirmButtonText: "OK"
        });
    });
    </script>
	<!-- あらかじめcssを読み込んでいるので設定しなくてOK-->
</head>
<body>
    
<div class="contact">
    <p class="Contact-word">ENTRY</p>


    <form class="Contact-form" method="post" action="entry2.php">
    <input type="hidden" name="kanri_flg" value="0">
    <input type="hidden" name="life_flg" value="0">
        <table>
            <tbody>
            <tr>
                <th>name(本名)</th>
                <td><input type="text" name="name" value="" class="input"></td>
            </tr>
            <tr>
                <th>ユーザID(ニックネーム)</th>
                <td><input type="text" name="lid" value="" class="input"></td>
            </tr>
            <tr>
                <th>Password</th>
                <td><input type="password" name="lpw" value="" class="input"></td>
            </tbody>
        </table>
        <P class="submit"><input type="submit" value="ENTRY!"></P>
    </form>

    <button class="button"><a class="navbar-footer" href="index.php">ログイン画面へ戻る</a></button><br>
    <button class="button"><a class="navbar-footer" href="select_free.php">会員登録せずにアンケート結果を閲覧</a></button>

</div>
    

    
<!-- この上に記述 -->
</body>
</html>
<!--<P class="submit"><input type="submit" value="ENTRY!"></P>-->
