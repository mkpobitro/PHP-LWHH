<?php
interface BaseStudent {
    function displayName();
}

class Student implements BaseStudent {
    private $name;
    function __construct( $name ) {
        $this->name = $name;
    }

    function displayName() {
        echo "My Name is " . $this->name;
    }
}

class ImprovedStudent implements BaseStudent {
    private $name;
    private $title;
    function __construct( $name, $title ) {
        $this->name = $name;
        $this->title = $title;
    }
    function displayName() {
        echo "Hello From {$this->title}, {$this->name}";
    }
}

//Hard Coded Dependency
//Titley couple
// class StudentManager {
//     function introduceStudent( $name ) {
//         $st = new Student( $name );
//         $st->displayName();
//     }
// }

//loosely couple
class StudentManager {
    function introduceStudent( BaseStudent $student ) {
        $student->displayName();
    }
}

$st = new Student( "Pobitro Raj" );
$ist = new ImprovedStudent( "Pobitro Raj", "Mr" );
$sm = new StudentManager();
$sm->introduceStudent( $ist );