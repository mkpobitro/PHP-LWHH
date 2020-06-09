<?php 

$pdo = new PDO("sqlite:db.sqlite");
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));

$users = [
    [ 'name' => 'helal', 'email' => 'helal@com' ],
    [ 'name' => 'sumon', 'email' => 'sumon@com' ],
];
foreach($users as $user){
    $stmt = $pdo->query("INSERT INTO users(name, email) VALUES('{$user['name']}', '{$user['email']}');");
}

$stmt = $pdo->query("SELECT * FROM users");
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));
