<?php

require_once("sql.php");

?>

<!DOCTYPE html>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <title>註冊</title>
</head>

<body style="text-align: center">
<form action="act/user_register.php">
    <div style="margin-top: 2rem">
        <label for="user_name">姓名</label>
        <input type="text" id="user_name" name="user_name" placeholder="請輸入姓名">
    </div>
    <div>
        <label for="user_email">電郵</label>
        <input type="email" id="user_email" name="user_email" placeholder="請輸入email">
    </div>
    <div>
        <label for="user_password">密碼</label>
        <input type="password" id="user_password" name="user_password" placeholder="請輸入密碼">
    </div>
    <div style="margin-top: 1rem;">
        <input type="submit" value="註冊" />
    </div>
</form>
</body>

</html>
