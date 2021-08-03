<?php
require_once("sql.php");
?>
<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <title>登入</title>
</head>

<body style="text-align: center">
<form action="act/verify.php" method="post">
    <div>
        <h2>登入</h2>
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
        <button type="button" onclick="register()">前往註冊</button>
        <input type="submit" value="登入" />
    </div>
</form>
</body>

</html>

<script>
    <?php
        // 如果有這個信箱密碼錯誤的session
        if(isset($_SESSION['login_error'])){
            // 讓javascript 顯示alert
            echo 'alert("' . $_SESSION['login_error'] . '")';
            // 清除session
            unset($_SESSION['login_error']);
        }
    ?>
    // 跳轉至註冊頁面
    function register(){
        document.location.href="register.php";
    }
</script>
