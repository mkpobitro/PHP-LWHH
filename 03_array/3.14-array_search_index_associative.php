<?php
    //৩.১৪ - ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারেতে সার্চ করা
    $products = array('l'=>'laptop','m'=>'mobile', 'r'=>'radio');
    $numbers  = array(12, 33, 4, 21, 76, 2, 12, 33, 2);
    $n = 21;
    if(in_array($n, $numbers)){ //needles[সুচ] //haystack[খড়ের গাঁদা]
        echo "{$n} is found"; //21 is found
    }

    echo PHP_EOL;

    $offset = array_search($n, $numbers); //position check
    echo "Offset Number $offset"; //Offset Number 3

    echo PHP_EOL;

    if(key_exists('m',$products)){
        echo "Key m exists"; //Key m exists
    }