<?php
$pdo = new PDO("sqlite:db.sqlite");
$stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
$email = "pob@gmail.com";
$stmt->execute([$email]);

print_r($stmt->fetchAll(PDO::FETCH_ASSOC));