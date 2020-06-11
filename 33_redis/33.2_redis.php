<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

$redis->set( "key", 10 );
$redis->expire( "key", 30 );
// $redis->set('key', 20, 'EX', 20);
// echo $redis->get("key");

$redis->set( "user1", json_encode( ["name" => "pobitro", "email" => "pob@com"] ) );
echo $redis->get( "user1" );
// print_r(json_decode($redis->get("user1"), true));