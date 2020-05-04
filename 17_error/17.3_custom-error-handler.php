<?php
//======================practice:1===================
function custom_error_handler($severity, $msg, $file, $line){
    echo "Error [{$severity}]: {$msg} in {$file} on linee number {$line}\n\n";
}
set_error_handler("custom_error_handler");
// echo substr(['hello'], 6);

//trigger_error — Generates a user-level error/warning/notice message
// trigger_error("This is an error");


function division($divident, $divisor){
    if(0 == $divisor){
        trigger_error("Cannot divide by 0");
    }else{
        return $divident/$divisor;
    }
}
echo division(10,0);



/*/==================Practice:2==================
function custom_error_handler($severity, $msg, $file, $line){
    switch($severity){
        case E_WARNING:
        echo "Warning Error [{$severity}]: {$msg} in {$file} on linee number {$line}";  
        break;
        case E_NOTICE:
        echo "Notice Error [{$severity}]: {$msg} in {$file} on linee number {$line}";
        break;
        default:
        echo "Error [{$severity}]: {$msg} in {$file} on linee number {$line}";
    }
}
set_error_handler("custom_error_handler");
// echo substr(['hello'], 6);
echo $book;

*/