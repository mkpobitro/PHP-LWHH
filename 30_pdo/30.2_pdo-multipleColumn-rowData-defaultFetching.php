<?php
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=lwhh_mysql;charset=UTF8;", 'root', '');

//default mode
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

if($pdo){
    $stmt = $pdo->query("SELECT * FROM students WHERE class = 1 and section = 'A'");
    // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $result = $stmt->fetchAll();
    print_r($result);
}