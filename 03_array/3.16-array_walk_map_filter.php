<?php
//৩.১৬ - অ্যারের ইউটিলিটি ফাংশনস - খুবই জরুরী - ওয়াক, ম্যাপ এবং ফিল্টার

$numbers = array( 1, 2, 3, 4, 5, 6, 7 );

function square( $n ) {
    printf( "Square of %d is %d \n", $n, $n * $n );
}
array_walk( $numbers, 'square' ); // array_walk শুধুমাত্র echo তে কাজে লাগবে

//array_map()
function cube( $n ) {
    return $n * $n * $n; // return value ber korte array_map use korte hobe
}
$newArray = array_map( 'cube', $numbers );
print_r( $newArray );

//array_filter()
function even( $n ) {
    return $n % 2 == 0;
}
function odd( $n ) {
    return $n % 2 == 1;
}

$evenNumbers = array_filter( $numbers, 'even' ); // even = callback function
$oddNumbers = array_filter( $numbers, 'odd' );
print_r( $evenNumbers );
print_r( $oddNumbers );

$name = array( 'susmi', 'pobitro', 'hasu', 'salam', 'shovon', 'golam' );
function filterByS( $name ) {
    return $name[0] == 's';
}

$newNames = array_filter( $name, 'filterByS' );
print_r( $newNames );