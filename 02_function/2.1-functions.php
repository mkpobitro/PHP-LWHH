<?php 
//২.১ - ফাংশন কি এবং কিভাবে লিখতে হয়
    //Determines if the argument is even or odd
    function isEven($n){ // parameter
        if($n % 2 == 0){
            return true; 
        }
        return false;
    }


    $x = 3; // 3 is an odd number
    if(isEven($x)){ //argument
        echo "{$x} is an Even Number";
    }else{
        echo "{$x} is an Odd Number";
    }
 