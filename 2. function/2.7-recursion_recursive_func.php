<?php

//২.৭ - রিকার্সন এবং রিকার্সিভ ফাংশন
//recursive function //recursion
function printN($i){

    if($i > 10){
        return;
    }

    echo $i."\n";
    $i++;
    printN($i); // output = 2 3 4 5 6 7 8 9 10
}

printN(2);

function printNumber($counter, $end, $stepping = 1){

    if($counter > $end){ // recursive ফাংশন লেখার সময় আগে breaking condition টা ঠিক রাখতে হবে
        return;
    }
    
    echo $counter."\n";
    $counter += $stepping;
    printNumber($counter, $end, $stepping);
}

printNumber(12,22,3); //output = 12 15 18 21

