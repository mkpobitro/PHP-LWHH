<?php

// ১.২৪ - ফর লুপ দিয়ে কোন নাম্বারের ফ্যাক্টোরিয়াল বের করা
// 6 =  6*5*4*3*2*1 =720;
$n =6;
for($i = $n, $factorial = 1; $i>1; $i--){
    // $factorial = $factorial * $i;
    $factorial*= $i;
}
printf("Factorial of %d is %d",$n,$factorial); //output = 720








// ১.২৫ - স্মার্ট কোডিং ভার্সেস ডাম্ব কোডিং - কেন নিজের কোড নিজে রিভিউ করা প্রয়োজন
$n = 5;
$result = 1;
for($i=$n; $i>1; $i--){
    $result *= $i;
}
echo "Factorial of {$n} is {$result} \n";


// ১-১০ পর্যন্ত প্রিতিটি সংখার Factorial বের করে দেখানো হলো (Redimate way):
$j = 1;
for($n=1; $n<=12; $n++){
    $result = 1;
    for($i=$n; $i>1; $i--){
        $result *= $i;
        $j++;
    }
    echo "Factorial of {$n} is {$result} \n";
    
}
echo "Total {$j} number of operations \n"; //total operation দিবে 67 number


// ১-১০ পর্যন্ত প্রিতিটি সংখার Factorial বের করে দেখানো হলো (Smart & Standard way):
//এখানে কোড টাও ছোট হয়ে যাবে। এভাবে ষ্ট্যাণ্ডার্ড ওয়েতে কোড করা উচিত
$j = 1;
$result = 1;
for($n =1; $n<=12; $n++){
    $result *= $n;
    $j++;
    echo "Factorial of {$n} is {$result} \n";
}
echo "Total {$j} number of Operations \n"; //total operation দিবে 13 number



