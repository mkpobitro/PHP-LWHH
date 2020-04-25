<?php

trait NumberSeriesOne{
    function NumberSeriesA(){
        echo "Number Series A\n";
    }

}
trait NumberSeriesTwo{
    function NumberSeriesB(){
        echo "Number Series B\n";
    }

}


class NumberSeries{
    use NumberSeriesOne, NumberSeriesTwo{
        NumberSeriesOne::NumberSeriesA as NumberA;
        NumberSeriesTwo::NumberSeriesB as NumberB;
    }

    function NumberSeriesA(){
        echo "Number Series A++++\n";
    }

}

$ns = new NumberSeries();
$ns->NumberSeriesA();
$ns->NumberB();