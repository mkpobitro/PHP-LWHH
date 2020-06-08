<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = $mysqli->prepare("SELECT name FROM students WHERE name LIKE ?");

$name = "%br%";
$stmt->bind_param("s", $name);

$stmt->execute();
$data = $stmt->get_result()->fetch_all(MYSQLI_ASSOC);
print_r($data);

$stmt->close();