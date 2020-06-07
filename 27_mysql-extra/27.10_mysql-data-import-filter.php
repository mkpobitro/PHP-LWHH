<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$stmt = $mysqli->prepare("INSERT INTO newstudents(name, sex, class, section, roll) VALUES (?,?,?,?,?)");
$name = ''; $sex = ''; $class = ''; $section =''; $roll = ''; 
$stmt->bind_param('ssisi', $name, $sex, $class, $section, $roll);

$csv_data = array_map('str_getcsv', file('babynames-clean.csv'));
shuffle($csv_data);
// print_r($csv_data[10]);
$_students = [];
$sections = ['A', 'B', 'C', 'D'];
for($i=0;$i<1200;$i++){
    $name = $csv_data[$i][0];
    $sex = $csv_data[$i][1]=='boy'?'M':'F';
    $class = rand(1,10);
    $section = $sections[array_rand($sections)];
    $_students["{$class}{$section}"][] = 1;
    $roll = count($_students["{$class}{$section}"]);
    // printf("%s:%s:%s:%s:%s \n", $name, $sex, $class, $section, $roll );
    $stmt->execute();
}