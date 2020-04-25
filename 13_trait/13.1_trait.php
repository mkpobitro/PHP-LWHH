<?php

trait NumberSeriesOne{
    private function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        // $this->NumberSeriesA();
        echo "Number Series B\n";
    }
}

trait NumberSeriesTwo{
    function NumberSeriesC(){
        echo "Number Series C\n";
    }
    function NumberSeriesD(){
        $this->NumberSeriesA();
        echo "Number Series D\n";
    }
}

class NumberSeries{
    use NumberSeriesOne, NumberSeriesTwo;
}

$ns = new NumberSeries();
// $ns->NumberSeriesA();
$ns->NumberSeriesB();
$ns->NumberSeriesD();
