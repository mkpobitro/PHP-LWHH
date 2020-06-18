<?php
$data = <<<STRING
The capital of bangladesh is dhaka
The capital of afganistan is kabul
The capital of srilanka is colombo
The capital of nepal is kathmandu
The capital of bhutan is thimpu
The capital of maldives is male
STRING;

$pattern = '/The capital of ([\w]+) is ([\w]+)/';
preg_match_all( $pattern, $data, $matches );
// print_r( $matches[1] );
// echo preg_replace($pattern, 'The capital of <strong>$1</strong> = {$2}', $data);


echo preg_replace_callback( $pattern, 'replacer', $data );
function replacer( $match ) {
    // print_r( func_get_args() );
    return 'The capital of <strong>' . ucfirst( $match[1] ) . '</strong> = ' . ucfirst( $match[2] );
}

// echo preg_replace_callback( $pattern, function ( $match ) {
     // print_r( func_get_args() );
    // return 'The capital of <strong>'.ucfirst( $match[1] ).'</strong> = '.ucfirst( $match[2] );
// }, $data );
