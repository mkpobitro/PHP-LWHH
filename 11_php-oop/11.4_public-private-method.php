<?php

Class Fund {
    private $fund;
    function __construct( $initialFund = 0 ) {
        $this->fund = $initialFund;
    }

    public function addFund( $money ) {
        $this->fund += $money;
    }

    public function deductFund( $money ) {
        $this->fund -= $money;
    }

    public function totalFund() {
        echo "Total Fund is {$this->fund}\n";
    }
}

$ourFund = new Fund( 200 );
// $ourFund->fund = 100;

$ourFund->addFund( 20 );
$ourFund->totalFund();

$ourFund->deductFund( 30 );
$ourFund->totalFund();