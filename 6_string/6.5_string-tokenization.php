<?php

//string to array
$string = "Hello Dolly, How are you";
$string2 = "Bangadesh is,a Development Country";
$parts = explode(", ", $string);
print_r($parts);

//array to string 
// $original = implode(", ", $parts);
$original = join(", ", $parts);
echo $original;

echo PHP_EOL;

/*/every character alada kora
$parts2 = str_split($string);
print_r($parts2); 
*/
echo PHP_EOL;

// If we want to break by multiple delimiter. We have 2 options: Strtok & Regular expression 
$parts3 = strtok($string, " ,");
while( $parts3 !== false ){
    echo $parts3."\n"; //interator
    $parts3 = strtok(" ,");
}

echo PHP_EOL;

$parts4 = strtok($string2, " ,");
while($parts4 !== false){
    echo $parts4."\n";
    $parts4 = strtok(" ,");
}

//regular expression method:
echo PHP_EOL;
$parts5 = preg_split("/ |,/",$string2);
print_r($parts5);
