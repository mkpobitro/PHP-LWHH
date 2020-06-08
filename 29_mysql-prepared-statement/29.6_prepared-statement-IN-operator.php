<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$stmt = $mysqli->prepare("SELECT name, class, section FROM students WHERE class=? AND section IN (?,?) ORDER BY section");

$class = 10;
$section1 = 'A';
$section2 = 'B';
$stmt->bind_param("iss", $class, $section1, $section2);
$stmt->execute();

print_r($stmt->get_result()->fetch_all(MYSQLI_ASSOC));

