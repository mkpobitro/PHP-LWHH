<?php
//## ৩.৩ - অ্যাসোসিয়েটিভ অ্যারে নিয়ে বিস্তারিত আলোচনা ##
$students = array(  //simple associative array
    '80' => 'pobitro',
    '45' => 'hasu',
    '33' => 'aman',
);

echo $students[80];
echo PHP_EOL;

$sports = [
    'cricket'   => 'sachin, dhoni, shakib',
    'football'  => 'messi, ronaldo, kaka',
    'badminton' => 'federar, nadal, sania',
];
//Associative Array এর key তে নিউ value এড করতে চাইলে
// $sports['cricket']  = $sports['cricket'].", virat";
$sports['cricket'] .= ", virat";
echo $sports['cricket'];

echo PHP_EOL;

// Associative array এর ভিতরে আমরা এভাবে foreach এর মাধ্যমে লুপ চালাতে পারি
foreach ( $sports as $key => $value ) {
    echo $key . " = " . $value . "\n";
}

$keys = array_keys( $sports ); // using this function we can see all of our keys in the array
$values = array_values( $sports ); // using this function we can see all of our values in the array
print_r( $keys );
print_r( $values );
