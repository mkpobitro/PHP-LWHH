<?php

$string = "My name is pobitro raj";
//case sensitive
$replaceString = str_replace("pobitro", "Rahim", $string);
echo $replaceString;
echo PHP_EOL;


$string2 = "welcome to bangladesh";
//case insensitive
$replaceString2 = str_ireplace('Bangladesh', "India", $string2);
echo $replaceString2;
echo PHP_EOL;

//multiple string replace
$string3 = "Quick Brown brown Fox fox jumps over the lazy dog";
$string3 = str_ireplace(array('brown', 'fox'), array('yellow', 'cat'), $string3, $count);
echo $string3."\n";
echo "Total Replacement: $count";
echo PHP_EOL;



// এখন সবগুলাকে ১টা দিয়ে রিপ্লেস করতে চাইলে
$string4 = "Quick Brown brown Fox fox jumps over the lazy dog";
$string4 = str_replace(array('brown', 'fox', 'dog'), 'cat',$string4, $count);
echo $string4."\n";
echo "Replacement: ".$count;
