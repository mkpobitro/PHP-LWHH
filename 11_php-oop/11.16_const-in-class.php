<?php

//OOP তে defind দিয়ে কন্সট্যান্ট লিখতে পারবো না।
//const সবসময় static স্কোপে থাকে

class MyCity {
    const CITY = "Khulna\n";

    function sayHi() {
        echo "Hi from " . $this::CITY;
        echo "Hi from " . self::CITY;
    }
}

$mc = new MyCity();
// echo $mc::CITY;
echo $mc->sayHi();

echo MyCity::CITY;