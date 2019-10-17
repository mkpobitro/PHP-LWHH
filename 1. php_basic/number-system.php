<?php 
/*
// PHP তে যোগ
$number = 10;
$number = $number + 20; // same as $number += 20;
echo $number;


// PHP তে বিয়োগঃ
$number = 30;
$number -= 20; //same as $number = $number - 20;
$number *= 2; // same as $number = $number * 2;
$number /= 2; // same as $number = $number / 2;
echo $number;


// PHP তে গুনঃ
$result = 40 * 50;
echo $result;

// PHP তে ভাগ করার জন্য forward slash ইউস করা হয়। মাথা সামনে থাকলে Forward আর মাথা পিছনে থাকলে backward slash.
$result = 40 / 10;
echo $result;

// Modulars Operator(%) দিয়ে ভাগশেষ বের করা হয়
$result2 = 10 % 4;
echo $result2;

//  BODMAS = Bracket Or Division Multiplication Addition Subscription
$number3 = (4+5) / (8-4);
echo $number3;


// Multiple variable assign:
$a = $b = 7;
echo $a,$b;

*/

    $c = 5;
    $d = $c++;
    echo $c, "\n", $d; //output will be = 6 5

    /* PHP এটাকে এভাবে Read করবে

    $d = $c++;
    $d = $c;
    $c = $c + 1;
    */

    $e = 5;
    $f = ++$e;
    echo $e, "\n", $f; //output = 6 6

    /*PHP এটাকে এভাবে Read করবে
    $f = ++$e;
    $e = $e+1;
    $f = $e
    */


    // Number Base:

    $number = 12; //decimal number
    $o = 012; // octal and output = 10
    $h = 0x2B;
    printf("the number is %d and %d and %d", $number, $o, $h); // output= 12 and 10
    printf("The binary equivalent of %d is %b", 12, 12); // output= 12 and 1100
    printf("The hexadecimal equivalent of %d is %x", 1210, 1210); // output= 1210 and 4ba
    printf("The octal equivalent of %d is %o", 65536, 65536); // output= 65536 and 200000

    printf("octal %o and %d", 0100000, 0100000); // output = 100000 = 32768



    