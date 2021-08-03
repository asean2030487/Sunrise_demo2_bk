
<?php

require_once("sql.php");

?>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <title>註冊</title>
</head>

<body style="text-align: center">
<form action="act/insert.php" method="post">
    <div style="margin-top: 2rem">
        <h2>註冊</h2>
    </div>
    <div>
        <label for="user_name">姓名</label>
        <input type="text" id="user_name" name="user_name" placeholder="請輸入姓名">
    </div>
    <div>
        <label for="user_email">信箱</label>
        <input type="email" id="user_email" name="user_email" placeholder="請輸入email">
    </div>
    <div>
        <label for="user_password">密碼</label>
        <input type="password" id="user_password" name="user_password" placeholder="請輸入密碼">
    </div>
    <div style="margin-top: 1rem;">
        <button type="button" onclick="login()">已有帳號，進行登入</button>
        <input type="submit" value="註冊" />
    </div>
</form>
</body>
<script>
    function login(){
        document.location.href="login.php";
    }
</script>
</html>
