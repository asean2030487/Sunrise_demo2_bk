<?php
/**
 * 使用者登出
 */
require_once('../sql.php');

// 清空所有session
session_destroy();
// 跳轉至登入
header('Location: /login.php');
