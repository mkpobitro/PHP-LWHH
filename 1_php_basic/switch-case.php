<?php

// ১.১৬ - কন্ডিশন চেক করার আরেকটি উপায় - সুইচকেস

$n = 11;
$r = $n % 2;


switch($r){
    case 0:
        echo "$n is an even number \n";
        break;
    default:
        echo "$n is a odd number \n";  
}

$color = "green";
switch($color){
    case "red":
        echo "Red is my favorite color";
        break;
    case "green";
        echo "Green is our favorite color";
        break; 
// Multiple case সেম হলে এভাবেও লেখা যায়ঃ
    case "red";
    case "green";
        echo ucwords($color)," is our favorite color";
        break;
    case "black";
        echo "Black is not our favorite color";
        break;
    default:
        echo "This is another color";        
}

/* Multiple line PHP এভাবে কাজ করেঃ
if("red" == $color || "green" == $color){
    echo "$color is our favorite color";
} 

*/


// ১.১৭ - সুইচকেস নিয়ে আরও কথা
echo PHP_EOL;

$n = -11;
$r = $n % 2;

switch ($r){
    case 0;
        switch ($n){
            case $n>0:
                echo "$n is a positive even number";
                break;
            case $n<0:
                echo "$n is a negative even number";
                break;
        }
        break;
    default:
        switch ($n){
            case $n>0:
                echo "$n is a positive odd number";
                break;
            case $n<0:
                echo "$n is a negative odd number";
                break;
        }
}
// উপরের সেম কন্ডিশন আরো সহজ করে এভাবে লিখতে পারি। এটা আরো বেশি Readable
echo PHP_EOL;
switch (true){
    case (0 == $r && $n>0):
        echo "$n is a positive even number";
        break;
    case (1 == $r && $n>0):
        echo "$n is a positive odd number";
        break;
    case (0 == $r && $n<0):
        echo "$n is a negative even number";
        break;
    case (-1 == $r && $n<0):
        echo "$n is a negative odd number";
        break;
}

    // ১.১৮ - সুইচ কেসের একটা মজার ইস্যু

    $ball = "8balls";
    switch($ball){
        case (string) "9balls":
            echo "Nine Balls";
            break;
        case (string) 8:
            echo "8";
            break;
        case (string) "8balls":
            echo "Eight Balls";
            break;
    } 


    
    // ১.২০ - পিএইচপিতে কন্ট্রোল স্ট্রাকচারের অল্টারনেটিভ সিনট্যাক্স নিয়ে আলোচনা
        // Switch Alternative way:
    switch ($n % 2 == 0):
        case 0:
            echo "Even Number";
            break;
        default:
            echo "Odd Number";
            break;
    endswitch;                



