<?php

require "vendor/autoload.php";
$redis = new Predis\Client();

// $redis->rpush('chatroom', 'Pobitro: I\'m Pobitro');

// echo $redis->llen('chatroom');
$length = $redis->llen('chatroom');
print_r($redis->lrange('chatroom', 0, $length));