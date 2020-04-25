<?php

trait NumberSeriesOne{
    private function NumberSeriesA(){
        echo "Number Series A\n";
    }
    function NumberSeriesB(){
        echo "Number Series B\n";
    }
}

class Number{
    function NumberSeriesB(){
        echo "Number Series B++\n";
    }
}

class NumberSeries extends Number{
    use NumberSeriesOne;

    // function NumberSeriesB(){
    //     echo "Number Series B+++\n";
    // }
}

$s = new NumberSeries();
$s->NumberSeriesB();