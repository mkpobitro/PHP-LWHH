<?php

//৭.১ - ফাইল থেকে ডেটা পড়া
$filename = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data1.txt";
if ( is_readable( $filename ) ) {
    $fp = fopen( $filename, 'r' );
    $data1 = fgets( $fp );
    echo $data1;
    $data1 = fgets( $fp );
    echo $data1;

    // যদি পুরো ফাইল টা একবারে পড়তে চাই। তাহলে একটা লুপ দিয়ে করতে পারি
    while ( $data1 = fgets( $fp ) ) {
        echo $data1;
    }

    // rewind( $fp );
    fseek( $fp, 2 );
    while ( $data1 = fgets( $fp ) ) {
        echo $data1 . "-";
    }

    fclose( $fp );

    // file()    [ এটা পুরো ডাটা কে array হিসেবে রিটার্ন করে ]
    $data1 = file( $filename );
    print_r( $data1 );

    // file_get_contents() [ পুরো ডাটা একবারে প্রিন্ট করার জন্য ]
    $totalData = file_get_contents( $filename );
    echo $totalData;
}
