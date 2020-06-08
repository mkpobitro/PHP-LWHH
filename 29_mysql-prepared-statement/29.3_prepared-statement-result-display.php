<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = $mysqli->prepare("SELECT * FROM students WHERE class=? AND section=?");

$class = 1;
$section = 'A';
$stmt->bind_param("is", $class, $section);
$stmt->execute();

echo $stmt->get_result()->num_rows;
echo "\n";

//Another statement
$class = 5;
$section = 'C';
$stmt->execute();

echo $stmt->get_result()->num_rows;
$stmt->close();
 