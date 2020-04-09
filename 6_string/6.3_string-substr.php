<?php 
$string = "Welcome Bangladesh";

echo $string[0]."\n";
echo $string[-1]."\n"; 

echo substr($string, 2, 5)."\n";
echo substr($string, -5,3)."\n";
echo substr($string, -5,-3);

//
$newString = "Hello World";
echo $newString[3]."\n"; 
//substring
echo substr($newString, -4,2);
