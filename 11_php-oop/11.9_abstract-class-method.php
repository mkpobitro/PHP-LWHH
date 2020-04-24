<?php

abstract Class OurClass {
    function sayHi() {
        echo "Hi There!";
    }

    abstract public function sayName( $personName );
}

Class MyClass extends OurClass {
    public function sayName( $name ) {
        echo $name;
    }
}

$mc = new MyClass();
$mc->sayName( "Pobitro" );