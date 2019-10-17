<?php

//২.২ - ফাংশন প্যারামিটারের টাইপ হিন্টিং বা টাইপ চেক
    function factorial(int $n){ //this is type hinting and its available for PHP7
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result  *= $i;
        }
        return $result;
    }

    $x = 6;
    echo "Factorial of {$x} is ".factorial($x); // Factorial of 6 is 720


    // if PHP7 version is not avaiable we can check this way:
    function factorial($n){

        if( gettype($n)!="integer" ){
            return "invalid";
        }
        $result = 1;
        for($i = $n; $i > 1; $i--){
            $result *= $i;
        }
        return $result;
    } 

    $x = "ab";
    echo "Factorial of {$x} is ".factorial($x); // Factorial of ab is invalid
    


 
