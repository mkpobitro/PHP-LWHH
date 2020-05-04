<?php 

echo ord('A');
echo PHP_EOL;

echo ord('a');
echo PHP_EOL;

echo chr(98);
echo PHP_EOL;

// echo chr(1);

// 1-28 পর্যন্ত equivalent character গুলা প্রিন্ট 
for($i=1; $i<11; $i++){
    $chr = chr($i);
    echo $chr."\n";
}