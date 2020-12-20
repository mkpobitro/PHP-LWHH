<?php
$foods = [
    'vegetables' => explode( ', ', 'brinjal, carrot, potato' ),
    'fruits'     => explode( ', ', 'banana, orange, apple' ),
    'drinks'     => explode( ', ', 'water, milk' ),
];
//var_dump($foods['fruits']);

array_push( $foods['drinks'], 'juice' );
print_r( $foods );

//nested multidimensional array
$something = [
    'test' => [
        'test-again' => [
            'one',
            'two',
            'three',
        ],
    ],
];
echo $something['test']['test-again'][1]; // two

//another nested multidimentional array
$something2 = array(
    array( 1, 2, 3, 4 ),
    array( 11, 22, 33, 44 ),
    array( 111, 222, 333, 444 ),
    array( 1111, 2222, 3333, array( 5, 6, 7 ) ),
);
echo $something2[3][3][1]; //6



