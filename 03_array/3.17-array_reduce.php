<?php
//৩.১৭ - অ্যারের ইউটিলিটি ফাংশনস - খুবই জরুরী - অ্যারে রিডিউস

$numbers = array( 1, 2, 3, 4, 5, 6, 7 );

function sum( $oldValue, $newValue ) {
    return $oldValue + $newValue;
}

$sum = array_reduce( $numbers, 'sum' );
echo $sum; // 28
//array_reduce ফাংশন এটাকে এভাবে এক্সিকিউট করবে
// sum(0,1) / 1
// sum(1,2) / 3
// sum(3,3) / 6
// sum(6,4) / 10

echo PHP_EOL;

function even( $old, $new ) {
    if ( $new % 2 == 0 ) {
        return $old + $new;
    }
    return $old;
}

$even = array_reduce( $numbers, 'even' );
echo "Summation of Even Numbers $even.\n"; //12

echo "Total count numbers " . count( $numbers );

// function sum($carry, $item)
// {
//     $carry += $item;
//     return $carry;
// }

// function product($carry, $item)
// {
//     $carry *= $item;
//     return $carry;
// }

// $a = array(1, 2, 3, 4, 5);
// $x = array();

// var_dump(array_reduce($a, "sum")); // int(15)
// var_dump(array_reduce($a, "product", 10)); // int(1200), because: 10*1*2*3*4*5
// var_dump(array_reduce($x, "sum", "No data to reduce")); // string(17) "No data to reduce"
// ?>