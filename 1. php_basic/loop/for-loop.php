<?php
/*
for( $i=0; $i<12; $i++ ){
    // echo $i;
    echo PHP_EOL;
// একটা লুপের ভিতর আরেকটা লুপ ও রাখা যায়
    for($j=0; $j<$i; $j++){
        echo "*";
    }
}




// ১.২৩ - ফর লুপে মাল্টিপল স্টেপিং
    
for($i=10; $i>0; $i--){
    echo PHP_EOL;
    echo $i.":".(10-$i);
}
echo PHP_EOL;
// এটা মাল্টপল স্টেপ এ এভাবে লিখতে পারি
for($i=10,$j=0; $i>0; $i--,$j++){
    echo PHP_EOL;
    echo $i.":".$j;
}


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






// ১.২৬ - ফর লুপে মাল্টিপল স্টেপিং নিয়ে আরও কিছু কথা
    // যদি বলা হয় for লুপ দিয়ে ১ থেকে ১০০ পর্যন্ত সংখ্যার মধ্য থকে ৭ আর ১১ দিয়ে ভাগ যায় এমন সংখ্যা বের করোঃ

    for($i = 0; $i<=100; $i++){ // $i+=7 means $i= $i + 7
        // if($i % 7 ==0) echo $i.PHP_EOL;
        // if($i % 11 ==0) echo $i.PHP_EOL;
        
    // এটাকে এভাবেও লিখতে পারি
        echo $i % 7 == 0 ? $i."\n" : '';
        echo $i % 11 == 0 ? $i."\n" : '';

    }
    echo PHP_EOL;
    // এখন পুরো কন্ডিশন টাকে যদি for loop এর মাল্টিপল স্টেপিং দিয়ে করতে চায় তাহলেঃ
    for ($i = 0, $j = 0; $i < 100; $i +=7, $j += 11){
        echo $i.PHP_EOL;
        echo $j < 100 ? $j.PHP_EOL : "";
    }

*/


// ১.২৮ - লুপের মাঝে কন্টিনিউ এবং ব্রেক
// break
    for($i=0; $i<10; $i++){
        echo $i; // output= 0 1 2 3 4 5 6
        echo PHP_EOL;

        if ($i==6){
            break;
        }
    }
// এখানে break ইউস করার কারনে ২৬ প্রিন্ট করার পর আর পরের লুপে যাইতে পারে নাই। যার কারন ৩৯ শো করবে না। 
    for($i=20; $i<50; $i++){
        if($i % 13 == 0){
            echo $i.PHP_EOL;
            break; // output = 26
        }
    } 

//continue: এটার মানে হচ্ছে কন্ডিশনটা ডিরেক্টলি লুপের শেষে চলে আসবে। ঐ জিনিস টা আর রান করবে না। 
    for($i=20; $i<30; $i++){
        if($i < 25){
            continue;
        }
        echo $i.PHP_EOL; //output = 25 26 27 28 29
    }   

