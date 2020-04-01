<?php

 //########################## ৩.৭ - কপি বাই ভ্যালু এবং কপি বাই রেফারেন্স ###############################
   
    $person = array('fname'=> 'Hello', 'lname' => 'World');
    $newPerson = &$person;
    $newPerson['lname'] = 'Earth';
    //$person is now reference of $newPerson


    //যদি variable এর আগে reference(&) এড করা থাকলে এটাকে বলে copy by reference আর না থাকলে copy by value or deep copy

    print_r($person); //copy by reference or Shallow copy
    print_r($newPerson);

    function printData($person){
        $person['fname'] .= ' changed';
        print_r($person);

    }

    printData($person); //[fname] => Hello changed [lname] => Earth
    print_r($person); //    [fname] => Hello [lname] => Earth



