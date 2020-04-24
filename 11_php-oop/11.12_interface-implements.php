<?php

interface Moveable {

    public function move();
}

class Man implements Moveable {

    public function move() {
        echo "A man can move\n";
    }

}

class Vehicle implements Moveable {

    public function move() {
        echo "A Vehicle also can move";
    }
}

$mans = new Man();
$mans->move();
$machine = new Vehicle();
$machine->move();
?>



<?php

interface BaseAnimal {
    public function isAlive();
    public function canEat( $param1, $param2 );
    public function breed();
}

class Animal implements BaseAnimal {
    function isAlive() {

    }
    function canEat( $param1, $param2 ) {

    }
    function breed() {

    }
}

interface BaseHuman extends BaseAnimal {
    public function canTalk();
}

class Human implements BaseHuman {
    function isAlive() {

    }
    function canEat( $param1, $param2 ) {

    }
    function breed() {

    }
    public function canTalk() {

    }
}

$cat = new Animal();
// echo $cat instanceof BaseAnimal;
$h = new Human();
echo $h instanceof BaseHuman;