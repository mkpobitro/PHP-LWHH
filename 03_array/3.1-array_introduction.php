<?php
//############################ ৩.১ - অ্যারে পরিচিতি #################################
    $n = 10;
    $students = array("pobitro","hasu","aman");
    var_dump($students);

    echo count($students); //output = 4 
    echo PHP_EOL;

    // যদি আরের ভিতর সবগুলা ডাটা দেখতে চাই
    $n = count($students);
    for($i = 0; $i < $n; $i++){
        echo $students[$i]."\n"; //output = pobitro hasu aman
    }

    echo PHP_EOL;
    // যদি পেছন দিক থেকে লুপ চালাতে চাই
    for($i = $n-1; $i>=0; $i--){
        echo $students[$i]."\n"; // output = aman hasu pobitro
    }