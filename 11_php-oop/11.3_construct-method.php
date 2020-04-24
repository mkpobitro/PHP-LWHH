<?php

Class Human {
    public $name;
    public $age;
    function __construct( $personName, $personAge = 0 ) {
        echo "Construct Method run automatically\n";
        $this->name = $personName;
        $this->age  = $personAge;
    }

    function sayHi() {
        echo "Hi There!\n";
        $this->sayName();
    }

    function sayName() {
        if ( $this->age ) {
            echo "My Name is {$this->name} and I am {$this->age} years old\n";
        } else {
            echo "My Name is {$this->name} and I don't know how old I am";
        }
    }
}

$h1 = new Human( "Pobitro Raj", 24 );
$h2 = new Human( "Hasin Hyder", 42 );
$h3 = new Human( "Dipon Sarkar" );
$h1->sayHi();
$h2->sayHi();
$h3->sayHi();