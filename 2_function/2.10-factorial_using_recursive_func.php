<?php


// ২.১০ - রিকার্সিভ ফাংশনের সাহায্যে ফ্যাক্টোরিয়াল বের করা
function factorial($n){
    if($n <= 1){ //condition break
        return 1;
    }
    return $n * factorial($n-1);
}
echo factorial(5); // output = 120