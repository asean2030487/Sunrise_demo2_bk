<?php
require_once("sql.php");

// 若session不存在，代表還未登入，跳轉至登入頁面
if(!isset($_SESSION['user_name'])){
    header('Location: /login.php');
}
?>

<html lang="zh-Hant-TW">
<head>
    <meta charset="utf-8">
    <title>首頁</title>
</head>

<body style="text-align: center">
<form action="act/logout.php" method="post">
    <div>
        <h2>您好，<?php echo $_SESSION['user_name'] ?></h2>
    </div>
    <div style="margin-top: 1rem;">
        <input type="submit" value="點我登出" />
    </div>
</form>
</body>

</html>
