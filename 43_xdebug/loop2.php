<?php
for ( $i = 0; $i < 10; $i++ ) {
    $result = getResult($i);
    echo "=======display Result =========\n";
    displayResult($i, $result);
}

function getResult($i){
    return $i % 2 == 0 ? 'even' : 'odd';
}

function displayResult($a, $result){
    printf("%d is %s\n", $a, $result);
}