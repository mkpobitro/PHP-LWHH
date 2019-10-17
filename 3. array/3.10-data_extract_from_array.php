<?php

//###########৩.১০ - মূল অ্যারে ঠিক রেখে অ্যারে থেকে কিছু ডেটা এক্সট্রাক্ট করা #############

    $name = array("rahim", "karim" , "Jamal", "Fahim", "kamal");

    $sliceName = array_slice($name, 2); //output = [0]=>Jamal [1]=>Fahim [2]=>kamal
    $sliceName = array_slice($name, 2, 2);//output = [0] => Jamal [1] => Fahim

    $sliceName = array_slice($name, -4, -1, true);//output = [1]=>karim [2]=>Jamal [3]=>Fahim 
    $sliceName = array_slice($name, -4, 2, true);//output = [1]=>karim [2]=>Jamal 
    print_r($sliceName);