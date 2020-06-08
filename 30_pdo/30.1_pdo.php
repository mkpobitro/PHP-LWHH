<?php
$pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=lwhh_mysql;charset=UTF8;", 'root', '');

if($pdo){
    $stmt = $pdo->query("SELECT COUNT(*) as N FROM students WHERE class = 1 and section = 'A'");
    // print_r($stmt->fetch(PDO::FETCH_ASSOC));

    $result = $stmt->fetchColumn();
    echo $result;
}