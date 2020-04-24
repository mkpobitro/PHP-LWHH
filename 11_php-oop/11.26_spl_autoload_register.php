<?php
// include "autoload/bike.php";
// include "autoload/planet.php";
// include "autoload/spaceship.php";

function autoload( $filename ) {
    if ( strpos( $filename, "Planet_" ) !== false ) {
        $file = str_replace( "Planet_", "", $filename );
        include "autoload/planets/{$file}.php";
    } else {
        include "autoload/{$filename}.php";
    }

}
spl_autoload_register( 'autoload' );

( new Bike )->motorCycle();
echo PHP_EOL;
( new Spaceship )->launch();

( new Planet_Mars )->getName();
