<?php
$data = [1,2,4, 6];
//named function
array_reduce($data, 'sum');
function sum($oldValue, $newValue){
    return $oldValue+$newValue;
}

//closure or anonymous function
echo array_reduce($data, function($oldValue, $newValue){
    return $oldValue+$newValue;
});
