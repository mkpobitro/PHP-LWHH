<?php

//২.৯ - পিএইচপিতে ভ্যারিয়েবল স্কোপ (খুবই ইম্পর্ট্যান্ট)

$name = "Earth";
function something(){ //global Scope
    // global $name;
    echo $name;
    // echo $GLOBALS["name"]; // eta use kora bad practice
}
something();

    
function something(){
    $name = "Earth"; //Local Scope
    $name;
}

something();


function doSomething(){
    static $i; //Static Scope
    $i = $i ?? 0;

    $i++;
    echo $i."\n";
}
doSomething();
doSomething();
doSomething();
doSomething(); //output = 1 2 3 4
