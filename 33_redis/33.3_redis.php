<?php 

require "vendor/autoload.php";
$redis = new Predis\Client();

$redis->set("product_stock", 10);
// echo $redis->get("product_stock");

// $redis->incr("product_stock",);
// $redis->incrby("product_stock", 5);


// $redis->decr("product_stock",);
$redis->decrby("product_stock", 5);



echo $redis->get("product_stock");