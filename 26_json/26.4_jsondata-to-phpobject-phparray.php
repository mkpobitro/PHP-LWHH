<?php
class Person{
    public $firstname;
    public $lastname;
}

$p = new Person();
$p->firstname = "John";
$p->lastname = "Doe";

$jsonData = json_encode($p, JSON_PRETTY_PRINT);

$decodedJSONData = json_decode($jsonData);
print_r($decodedJSONData);
echo $decodedJSONData->firstname;
echo "\n";


//কিন্তু যদি এটা Object এর বদলে Array তে চাই, তাহলে শেষে true বলে দিতে হবে।
$decodedJSONData2 = json_decode($jsonData, true);
print_r($decodedJSONData2);
echo $decodedJSONData2["lastname"];

