<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

$car = [
    'name'  => 'Sunny',
    'build' => '2004',
    'company'=> 'Nisan',
];

// $redis->hset('car01', 'name', 'Sunny');
// $redis->hset('car01', 'build', '2004');
// $redis->hset('car01', 'company', 'Nisan');

$redis->hmset('car01', $car);

// echo $redis->hget('car01', 'build')."\n";
// $redis->hset('car01', 'build', '2007'); // perticluar data update
// $redis->hdel('car01', 'build');
// echo $redis->del('car01');
// print_r($redis->hgetall('car01'));
print_r($redis->hmget('car01', 'name', 'company'));   