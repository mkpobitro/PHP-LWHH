<?php

//##৩.১২ - কয়েকটি অ্যারে কে একসাথে যোগ করা (খুবই ইম্পর্ট্যান্ট)

$products = array( 'laptop', 'desktop', 'mobile', 'camera', 'radio' );
$random = array( 'a' => 12, 'b' => 45, 'c' => 34, 'd' => 22, 'e' => 77, 'f' => 31, 12 => 78, 'g' => 87 );

$products1 = array_slice( $products, 0, 3 );
$products2 = array_slice( $products, 3, null, true );

$total_products = array_merge( $products1, $products2 ); // array যোগ করা

print_r( $products1 ); // [0]=>laptop [1]=>desktop [2]=>mobile
print_r( $products2 ); // [3]=>camera [4]=>radio
print_r( $total_products ); //[0]=>laptop [1]=>desktop [2]=>mobile [3]=>camera [4]=>radio

//+ দিয়েও array যোগ করতে পারি সেক্ষেত্রে indexing key দিয়ে ডিফাইন করবে। এজন্য length এর পরে true দেয়া থাকতে হবে।

$newProducts = $products1 + $products2;
print_r( $newProducts ); //[0]=>laptop [1]=>desktop [2]=>mobile [3]=>camera [4]=>radio

$r1 = array_slice( $random, 0, 2, true );
$r2 = array_slice( $random, 4, null, true );
$r3 = array( 'j' => 45, 'k' => 12 );

$randomData = array_splice( $random, 2, 2, array( 'j' => 45, 'k' => 12 ) );
$randomDataCorrectWay = $r1 + $r3 + $r2;
print_r( $random );
print_r( $randomDataCorrectWay );