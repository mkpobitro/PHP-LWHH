<?php

// ================Practice:1============================
class Student {
    public $name, $age;
    function __construct( $name, $age ) {
        $this->name = $name;
        $this->age  = $age;

        if ( $age < 4 ) {
            throw new Exception( "You're too Young", 101 );
        } elseif ( $age > 30 ) {
            throw new Exception( "You're too older", 102 );
        }
        return $this->age = $age;
    }
}

try {
    $st = new Student( "Pobitro", 22 );
    echo "Congrats {$st->name}, You are allowed for admission";
} catch ( Exception $e ) {
    echo $e->getCode() . ":" . $e->getMessage();
}

echo PHP_EOL;
echo PHP_EOL;
echo PHP_EOL;

// ===================Practice:2=====================
function checkNum( $num ) {
    if ( $num > 8 ) {
        throw new Exception( "Number is greater than Eight" );
    }
    return true;
}
try {
    checkNum( 10 );
    echo "Number is Less than Eight";
} catch ( Exception $g ) {
    echo $g->getMessage();
}