<?php

//৩.২০ - অ্যারে শাফল করা এবং র‍্যান্ডম নাম্বার নিয়ে আলোচনা

//mt_rand()
$numbers = range( 12, 30 );
// print_r($numbers);

$random = mt_rand( 0, 18 );
echo $random . "\n";
// echo $numbers[$random];

// mt_rand() ফাংশন দিয়ে একটা কন্ডিশন করা যাক

$luck = $numbers[$random];
if ( $luck % 2 == 0 ) {
    echo "Heads";
} else {
    echo "Tails";
}

echo "\n";
//shuffle()

shuffle( $numbers );
print_r( $numbers );