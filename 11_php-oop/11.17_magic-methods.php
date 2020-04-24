<?php

class Student {
    private $name;
    private $age;
    private $class;
    function __construct( $name = '', $age = '', $class = '' ) {
        $this->name  = $name;
        $this->age   = $age;
        $this->class = $class;
    }

    public function __get( $prop ) {
        return strtoupper( $this->$prop );
    }

    public function __set( $prop, $value ) {
        $this->$prop = $value;
    }

    // function setName( $name ) {
    //     $this->name = $name;
    // }
    // function getName() {
    //     return $this->name;
    // }

    // function setAge( $age ) {
    //     $this->age = $age;
    // }
    // function getAge() {
    //     return $this->age;
    // }

    // function setClass( $class ) {
    //     $this->name = $class;
    // }
    // function getClass() {
    //     return $this->class;
    // }

}

$st = new Student( 'Sumon', '24', '9' );
// $st = new Student();
// $st->setName( 'Sumon' );
$st->name = "Hasin";
echo $st->name;
