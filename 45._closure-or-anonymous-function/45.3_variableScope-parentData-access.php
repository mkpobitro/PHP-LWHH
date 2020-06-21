<?php
function scope(){
    $value = 1;
    $newValue = 2;

    $checkScope = function($anotherValue) use (&$value, $newValue){
        echo $value.PHP_EOL;
        echo $newValue.PHP_EOL;
        echo $anotherValue;

        $value = 10;
    };

    $checkScope(50);
    echo PHP_EOL;
    echo $value;
}

scope();