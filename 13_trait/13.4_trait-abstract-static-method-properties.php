<?php 

trait MyTrait{
    static $number;
    abstract function sayHi();
}

class MyClassA{
    use MyTrait;
    function sayHi(){
        echo "\nHi There!";
    }
}

class MyClassB{
    use MyTrait;
    function sayHi(){
        echo "\nHi There!++";
    }
}

MyTrait::$number = 2;
echo MyTrait::$number;
$c1 = new MyClassA();
$c1->sayHi();

echo PHP_EOL;
echo PHP_EOL;

MyClassB::$number = 4;
echo MyClassB::$number;
$c2 = new MyClassB();
$c2->sayHi();