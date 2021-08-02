<?php
require_once("sql.php");

$sql_str = "select * from users";

var_dump($conn->query($sql_str));

$conn->close();

