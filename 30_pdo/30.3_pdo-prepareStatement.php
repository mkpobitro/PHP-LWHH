<?php
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=lwhh_mysql;charset=UTF8;", 'root', '');

//Generel Method
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->prepare("SELECT * FROM students WHERE class = ? AND section = ?");
$stmt->execute([1, 'D']);
// print_r($stmt->fetchAll());

$stmt->execute([5, 'C']);
// print_r($stmt->fetchAll());


//Bind Param Method
$class = 1; $section='B';
$stmt->bindParam(1, $class, PDO::PARAM_INT);
$stmt->bindParam(2, $section, PDO::PARAM_STR);

$stmt->execute();
// print_r($stmt->fetchAll());

$class = 2;
$stmt->execute();
// print_r($stmt->fetchAll());



//Bind Value
$stmt->bindValue(2,'A', PDO::PARAM_INT);
print_r($stmt->fetchAll());

