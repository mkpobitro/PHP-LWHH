<?php
//৩.১৩ - ইনডেক্সড এবং অ্যাসোসিয়েটেড অ্যারে সর্টিং

$laptop = array( 'm' => 'mac', 'asus', 'h' => 'hp', 'dell' );
$numbers = array( 7, 22, 1, 19, 11, 15, 4 );
// sort($laptop); // will sort without preserve key
// rsort (for reverse)
// asort($laptop); // will sort with preserve key
// arsort(for reverse)
// ksort($laptop); // will sort with key serialize
krsort( $laptop ); // will sort with key reverse serialize
sort( $numbers, SORT_STRING ); // will sort string serialize
print_r( $laptop ); // [1] => dell [m] => mac [0] => asus [h] => hp
print_r( $numbers ); //    [0] => 1 [1] => 11 [2] => 15 [3] => 19 [4] => 22 [5] => 4 [6] => 7

// for($i=0; $i<count($numbers); $i++){
//     echo $numbers[$i]."\n";
// }

foreach ( $numbers as $number ) {
    echo $number . "\n"; // 1 11 15 19 22 4 7

}

$random = array( 'apple', 'Apple', 'banana', 'Banana' );
sort( $random, SORT_STRING | SORT_FLAG_CASE ); // case insensitive
print_r( $random ); //    [0] => apple [1] => Apple [2] => banana [3] => Banana