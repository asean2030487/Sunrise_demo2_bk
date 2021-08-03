<?php
/**
 * 使用者註冊驗證
 */
require_once('../sql.php');

// 取得表單傳遞之變數
$user_email = isset($_POST['user_email']) ? $_POST['user_email'] : '';
$user_password = isset($_POST['user_password']) ? $_POST['user_password'] : '';

// 驗證信箱、密碼欄位是否有未填
if(empty($user_email) || empty($user_password)){
    echo '請輸入信箱及密碼';
    exit();
}else{
    // 開始驗證 信箱&密碼
    $sql = "select * from users where user_email = '{$user_email}' and user_password = '{$user_password}'";
    // 判斷資料庫select有無資料
    if(is_null($conn->query($sql)->fetch_assoc())){
        // 登入失敗，跳轉回登入
        $_SESSION['login_error'] = '信箱或密碼錯誤!';
        header('Location: /login.php');
    }else{
        // 登入成功
        $user_name = $conn->query($sql)->fetch_assoc()['user_name'];
        // 移除帳號密碼錯誤的session
        unset($_SESSION['login_error']);
        // 使用者資訊加入session
        $_SESSION['user_name']= $user_name;
        // 跳轉至首頁
        header('Location: /index.php');
    }
}
