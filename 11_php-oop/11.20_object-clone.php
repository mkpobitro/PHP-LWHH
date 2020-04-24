<?php
/*

class FavColor {
public $data;

function __construct( $data ) {
$this->data = $data;
}

function setData( $data ) {
$this->data = $data;
}
}

$f1 = new FavColor( 'More Data' );
print_r( $f1 );

$f2 = clone $f1;
$f2->setData( 'Some Data' );
print_r( $f1 );
print_r( $f2 );

 */

class Color {
    public $color;
    function __construct( $color ) {
        $this->color = $color;
    }
    function setColor( $color ) {
        $this->color = $color;
    }

}

class FavColor {
    public $data;
    public $color;
    function __construct( $data, $color ) {
        $this->data  = $data;
        $this->color = new Color( $color );
    }

    function updateColor( $color ) {
        $this->color->setColor( $color );
    }

    function __clone() {
        $this->color = clone $this->color;
    }
}

$fc1 = new FavColor( 'Few Data', 'blue' );
print_r( $fc1 );

$fc2 = clone $fc1;
print_r( $fc2 );

$fc2->updateColor( 'white' );
print_r( $fc1 );
print_r( $fc2 );