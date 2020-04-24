<?php

Class Human {
    public $name;
    function sayHi() {
        echo "Hi There!\n";
        $this->sayName();
    }
    function sayName() {
        echo "My Name is {$this->name}";
    }
}

Class Cat {
    function sayHi() {
        echo "Mew\n";
    }
}

Class Dog {
    function sayHi() {
        echo "Woof";
    }
}

$h1       = new Human();
$h1->name = "Pobitro\n"; //set
$h1->age  = 24;
$h2       = new Human();
$h2->name = "Hasin Hyder\n";
$c1       = new Cat();
$d1       = new Dog();

$h1->sayHi();
echo $h1->age;
// $h1->sayName();
echo $h1->name; //get
// $c1->sayHi();

$h2->sayHi();
// $h2->sayName();
echo $h2->name;
