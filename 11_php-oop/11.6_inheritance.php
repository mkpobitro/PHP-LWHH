<?php
//কোডের duplicity কমানোর জন্য extends ইউস করবো [ইনহেরিট করে ]

Class Animal {
    protected $name;
    function __construct( $name ) {
        $this->name = $name;
        $this->run();
        $this->play();
    }
    function eat() {
        echo "I eat rice";
    }
    function run() {
        echo "I am running\n";
    }
    function sleep() {
        echo "I am sleeping";
    }
    function play() {

    }

    protected function addTitle() {
        echo "Mr. ";
    }
}

Class Human extends Animal {
    function run() {
        $this->addTitle();
        echo "{$this->name} is running\n";
    }
}
Class Cat extends Animal {
    function play() {
        echo "{$this->name} is playing now";
    }
}

$man = new Human( "Pobitro" );
// $man->run();

$cat = new Cat( "Pushi" );