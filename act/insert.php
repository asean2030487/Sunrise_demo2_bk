<?php
/**
 * 使用者註冊驗證
 */
require_once('../sql.php');

// 取得表單傳遞之變數
$user_name = isset($_POST['user_name']) ? $_POST['user_name'] : '';
$user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
$user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '';

// 驗證三個欄位是否有未填
if(empty($user_name) || empty($user_email) || empty($user_password)){
    echo '資料填寫未完全';
    exit();
}else{
    $insert_sql = "INSERT INTO users (user_name, user_email, user_password)
    VALUES ('{$user_name}','{$user_email}','{$user_password}')";
    // 進行註冊
    if($conn->query($insert_sql)){
        // 註冊成功
        header('Location: /login.php');
    }else{
        // 註冊失敗
        echo '註冊失敗!';
    }
}
