<?php
Class Shape {
    protected $name;
    protected $area;
    public function __construct( $name ) {
        $this->name = $name;
        $this->calculateArea();
    }

    public function getArea() {
        echo "This {$this->name}'s area is {$this->area}";
    }

    public function calculateArea() {

    }

}

Class Triangle extends Shape {
    private $a, $b, $c;
    public function __construct( $a, $b, $c ) {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct( "Triangle" );
    }

    public function calculateArea() {
        $perimeter  = ( $this->a + $this->b + $this->c ) / 2;
        $this->area = sqrt( $perimeter * ( $perimeter - $this->a ) * ( $perimeter - $this->b ) * ( $perimeter - $this->c ) );
    }
}

Class Rectangle extends Shape {
    private $a, $b;
    public function __construct( $a, $b ) {
        $this->a = $a;
        $this->b = $b;
        parent::__construct( "Rectangle" );
    }
    public function calculateArea() {
        $this->area = $this->a * $this->b;
    }
}

$r = new Rectangle( 2, 4 );
echo $r->getArea();

$t = new Triangle( 10, 12, 8 );
echo $t->getArea();