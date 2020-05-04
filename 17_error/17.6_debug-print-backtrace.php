<?php 

function x($a){
    y($a);
}   

function y($b){
    z($b*2);    
}

function z($c){
    if($c < 25){
        trigger_error("Too Small {$c}");
    }else{
        echo "{$c} is okay\n";
    }

    // debug_print_backtrace();
    print_r(debug_backtrace());

}

function w($d, $e){
    x($d + $e);
}

w(3, 5);