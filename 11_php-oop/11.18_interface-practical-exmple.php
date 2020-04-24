<?php

class districtCollection implements IteratorAggregate {
    private $districts;
    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    // function getDistricts() {
    //     return $this->districts;
    // }

    function getIterator() {
        return new ArrayIterator( $this->districts );
    }
}

$ds = new districtCollection();
$ds->add( "Dhaka" );
$ds->add( "Rajshahi" );
$ds->add( "Satkhira" );
$ds->add( "Bogra" );

// $totalDistricts = $ds->getDistricts();
// print_r( $totalDistricts );

// foreach ( $totalDistricts as $district ) {
//     echo "$district.\n";
// }

foreach ( $ds as $d ) {
    echo "$d\n";
}