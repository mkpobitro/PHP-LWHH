<?php 

$products = array('l'=>'laptop', 'm'=>'mobile', 'd'=>'desktop', 't'=>'tv');

// shuffle($products);
// print_r($products);

$key = array_rand($products);
// echo $key;
echo $products[$key]; 

echo PHP_EOL;

$_products = $products;
shuffle($_products);
print_r($_products);