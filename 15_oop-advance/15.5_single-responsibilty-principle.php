<?php

//===============practice:1===========================
class Student {
    function checkAttendance() {}
    function calculateGrade() {}
    function collectFee() {}
}

class GradeCalculator {

}

class Attendence {

}

class StudentPayments {

}

//=========================Practice:2======================
class Circle {
    private $radius;
    function getRadius( $radius ) {
        $this->radius = $radius;
    }
    function area() {
        echo "Area of Circle: " . pi() * pow( $this->radius, 2 );
    }
}
class Square {
    private $length;
    function getLength( $length ) {
        $this->length = $length;
    }
    function area() {
        echo "Area of Square: " . pow( $this->length, 2 );
    }
}

$circle = new Circle();
$circle->getRadius( 11 );
$circle->area();
echo PHP_EOL;
$square = new Square();
$square->getLength( 33 );
$square->area();