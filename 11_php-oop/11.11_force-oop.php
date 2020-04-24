<?php
//Shape নামে একটা বেস ক্লাস নেয়া হয়েছে এবং তাদের child class গুলাতে সেগুলা বলে দেয়া হয়েছে।
class Shape {

}

class Shapes {
    private $shapes;
    function __construct() {
        $this->shapes = array();
    }

    function addShape( Shape $shape ) {
        array_push( $this->shapes, $shape );
    }

    function totalShapes() {
        return count( $this->shapes );
    }
}

class Rectangle extends Shape {

}
class Triangle extends Shape {

}
class Student {

}

$shapesCollection = new Shapes();
$shapesCollection->addShape( new Rectangle() );
$shapesCollection->addShape( new Triangle() );
// $shapesCollection->addShape( new Student() );

echo $shapesCollection->totalShapes();