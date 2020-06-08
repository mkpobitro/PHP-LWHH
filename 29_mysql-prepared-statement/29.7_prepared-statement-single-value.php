<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$stmt = $mysqli->prepare("SELECT count(*) as total FROM students WHERE class=? AND section=?");

$class = 5;
$section = 'D';
$stmt->bind_param("is", $class, $section);
$stmt->execute();

// print_r($stmt->get_result()->fetch_all(MYSQLI_ASSOC));
$data = $stmt->get_result()->fetch_assoc();
print_r($data);
