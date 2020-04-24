<?php
class districtCollection implements IteratorAggregate, Countable {
    private $districts;
    function __construct() {
        $this->districts = array();
    }

    function add( $district ) {
        array_push( $this->districts, $district );
    }

    function getIterator() {
        return new ArrayIterator( $this->districts );
    }

    function count() {
        return count( $this->districts );
    }
}

$ds = new districtCollection();
$ds->add( "Dhaka" );
$ds->add( "Rajshahi" );
$ds->add( "Satkhira" );
$ds->add( "Bogra" );

echo "Total Districts: " . count( $ds );