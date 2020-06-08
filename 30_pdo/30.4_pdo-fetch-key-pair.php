<?php

$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=lwhh_mysql;charset=UTF8;", 'root', '');

//Generel Method
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT roll, name FROM students WHERE class = ? AND section = ?");

$stmt->execute([1, 'D']);

print_r($stmt->fetchAll(PDO::FETCH_KEY_PAIR));