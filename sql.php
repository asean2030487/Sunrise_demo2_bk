<?php
// 資料庫ip
$servername = "127.0.0.1:33060";
// 資料庫帳號
$username = "root";
// 資料庫密碼
$password = "root";
// 資料庫名稱
$database = "database_test";

// 建立與資料庫連線
$conn = new mysqli($servername, $username, $password,$database);
// 使用utf8mb4編碼連線，避免中文亂碼錯誤
$conn->set_charset("utf8mb4");
// 確認連線狀態
if ($conn->connect_error) {
  die("連接失敗!" . $conn->connect_error);
}
// echo "資料庫連接成功";
