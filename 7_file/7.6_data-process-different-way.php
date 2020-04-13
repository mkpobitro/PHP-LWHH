<?php
$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data6.txt";
$students = array(
    array(
        'fname' => 'Pobitro',
        'lname' => 'Raj',
        'age'   => '24',
        'id'    => '1',
    ),
    array(
        'fname' => 'Karim',
        'lname' => 'Shekh',
        'age'   => '22',
        'id'    => '2',
    ),
    array(
        'fname' => 'Sumon',
        'lname' => 'Sarkar',
        'age'   => '27',
        'id'    => '3',
    ),

);

// $fp = fopen( $file, 'w' );
// foreach ( $students as $student ) {
//     $data6 = sprintf( "%s,%s,%s,%s\n", $student['fname'], $student['lname'], $student['age'], $student['id'] );
//     fwrite( $fp, $data6 );
// }
// fclose( $fp );

//এবার যদি এটাকে পড়তে চাই
$fp = fopen( $file, 'r' );
while ( $data6 = fgets( $fp ) ) {
    echo $data6;
}
echo PHP_EOL;

//যদি আরে হিসেবে পড়তে চাই
$fp = fopen( $file, 'r' );
while ( $data6 = fgets( $fp ) ) {
    $student = explode( ',', $data6 );
    printf( "Name = %s %s\nAge = %s\nID = %s\n", $student[0], $student[1], $student[2], $student[3] );
}
echo PHP_EOL;

//এভাবে না করেও আমরা সহজ ভাবে ডেটা গুলা write এবং read করতে পারি। php তে built in কিছু ফাংশন আছে এটার জন্য
$fp = fopen( $file, 'w' );
foreach ( $students as $student ) {
    $dataType = fputcsv( $fp, $student );
}
fclose( $fp );

//fgetcsv() [আবার এটাকে যদি সহজ ভাবে পড়তে যাই]
$fp = fopen( $file, 'r' );
while ( $data = fgetcsv( $fp ) ) {
    $data = join( ',', $data );
    echo $data . "\n";
}
fclose( $fp );