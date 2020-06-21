<?php
//named function
function greet( $name ) {
    echo "Hello {$name}";
}
greet( "Pobitro" );


echo PHP_EOL;

//anonymous function
$greeter = function ( $name ) {
    echo "Hello {$name}";
};
$greeter( "World" );


