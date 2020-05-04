<?php
// ২.৮ - রিকার্সিভ ফাংশনের সাহায্যে ফিবোনাচ্চি সিরিজ প্রিন্ট করা

function fibonacci($old, $new, $start, $end){

    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $start, $end);
}

fibonacci(0,1,1,15);

echo PHP_EOL;

//Good Practice:

function hello($old, $new, $end){
    static $start;
    $start = $start ?? 1;

    if($start > $end){
        return;
    }
    $start++;

    echo $old." ";
    $_temp = $old + $new;
    $old = $new;
    $new = $_temp;

    hello($old, $new, $end);
}

hello(0,1,15);