<?php
//===========================practice:1=============================
class StringUtility {
    private $string;
    private $search;
    function __construct( $string ) {
        $this->string = $string;
    }

    function search( $searchString ) {
        $this->search = $searchString;
        return $this;
    }

    function replace( $replaceString ) {
        if ( !isset( $this->search ) ) {
            throw new Exception( "Nothing to replace" );
        }

        $this->string = str_replace( $this->search, $replaceString, $this->string );
        $this->search = "";
        return $this;
    }

    function upperCase() {
        $this->string = strtoupper( $this->string );
        return $this;
    }
    function lowerCase() {
        $this->string = strtolower( $this->string );
        return $this;
    }

    function print() {
        echo $this->string;
    }
}

$s = new StringUtility( "Hello World" );
// $s->search( "World" )->replace( "Earth" )->upperCase()->lowerCase()->print();

$s->search( "World" )
    ->replace( "Earth" )
    ->upperCase()
    ->lowerCase()
    ->print();

echo PHP_EOL;
//=========================practice:2===============================
class ABC {
    //member function one
    public function func1() {
        echo "function one \n";
        return $this;
    }
    //member function two
    public function func2() {
        echo "function two \n";
        return $this;
    }

    //member function three
    public function func3() {
        echo "function three \n";
        return $this;
    }

}

$obj = new ABC;
$obj->func1()->func2()->func3();

//======================practice:3========================
echo PHP_EOL;

class Bill {
    public $setMenu = 650;
    public $coldCoffee = 150;
    public $juice = 120;
    public $bill;

    //generate setmenu price
    public function setMenu( $person ) {
        $this->bill += $this->setMenu * $person;
        return $this;
    }

    //generate coldcoffee price
    public function coldCoffee( $person ) {
        $this->bill += $this->coldCoffee * $person;
        return $this;
    }

    //generate juice price
    public function juice( $person ) {
        $this->bill += $this->juice * $person;
        return $this;
    }
}

$totalBill = new Bill();
echo "Total Bill: " . $totalBill->setMenu( 2 )->coldCoffee( 2 )->juice( 2 )->bill . "Tk";

?>