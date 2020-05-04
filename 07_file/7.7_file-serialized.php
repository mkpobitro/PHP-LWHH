<?php

//৭.৭ - ফাইলে সিরিয়ালাইজড অ্যারের সাহায্যে ডেটা প্রসেস করা
$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data7.txt";
$cricketers = array(

    array(
        'name'     => 'Shakib Al Hasn',
        'country'  => 'Bangladesh',
        'category' => 'All-rounder',
        'century'  => '20',
    ),
    array(
        'name'     => 'Virat Kohli',
        'country'  => 'India',
        'category' => 'Batsman',
        'century'  => '70',
    ),
    array(
        'name'     => 'Steve Smith',
        'country'  => 'Australia',
        'category' => 'Batsman',
        'century'  => '50',
    ),

);

$cricketer = array(
    'name'     => 'Jack Kallis',
    'country'  => 'SouthAfrica',
    'category' => 'All-rounder',
    'century'  => '80',
);

// $cricketersData = serialize( $cricketers );
// file_put_contents( $file, $cricketersData );

$showCricketersData = file_get_contents( $file );
$allCricketers = unserialize( $showCricketersData );
print_r( $allCricketers );

// array_push( $allCricketers, $cricketer );

// unset( $allCricketers[2] );
// $cricketersData = serialize( $allCricketers );
// file_put_contents( $file, $cricketersData );
