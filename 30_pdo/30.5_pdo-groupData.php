<?php

$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=lwhh_mysql;charset=UTF8;", 'root', '');

//Generel Method
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT sex, name, roll, section FROM students WHERE class = ? AND section = ?");

$stmt->execute([1, 'D']);

$data = $stmt->fetchAll(PDO::FETCH_GROUP);
echo "Total Male ".count($data['M']);

echo "\n";

echo "Total FeMale ".count($data['F'])."\n";
print_r($data);