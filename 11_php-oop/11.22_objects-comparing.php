<?php
class Planet {
    public $name;
    function __construct( $name ) {
        $this->name = $name;
    }

}

$e        = new Planet( "Earth" );
$e1       = new Planet( "Earth" );
$e1->name = "pluto";
$m        = new Planet( "Mars" );
$e2       = $m;

if ( $e2 == $m ) {
    echo "Similar Planets";
} else {
    echo "Not Similar";
}