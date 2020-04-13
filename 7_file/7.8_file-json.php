<?php
//কিভাবে json_encode হিসেবে array এর ডাটা গুলা আমরা সেভ করে রাখতে পারি
$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data8.txt";
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

$encodedData = json_encode( $cricketers );
file_put_contents( $file, $encodedData );

$showData = file_get_contents( $file );
$allCricketers = json_decode( $showData, true );
print_r( $allCricketers );

echo $allCricketers[2]['name'];