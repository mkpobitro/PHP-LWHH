<?php

$a = 10;
if($a % 2 == 0){
    echo "$a is an even number";
}else{
    echo "$a is a odd number";
}




$hasu = 200;
$aman = 150;
if($hasu >= $aman){
    echo "hasu has same or more amount of money as aman";
}else if($hasu > $aman){
    echo "hasu has more money than aman";
}else if($hasu < $aman){
    echo "hasu has less amount of money than aman";
}else if($hasu == $aman){
    echo "hasu has same amount of money";
}





//another age if condition
$age = 12;

if($age >= 13 && $age <=18){
    echo "He is a teenager";
}else{
    echo "He is not a teenager";
}



$food = "apple";
// static data বা scaler value থাকলে সেটাকে বাম পাশে রাখাটাই বেটার তাহলে ইকুয়াল একটা কম দিলে ইরোর দেখাবে যাতে আমরা সহজে বুঝতে পারি যে একটা ইকুয়াল সাইন কম পড়ছে 
if ("banana" == $food || "mango" == $food){
    echo "\n{$food} has vitamin D";
}else if("apple" == $food){
    echo "\n{$food} doesn't contain vitamin D";
}else{
    echo "We don't know what if {$food} contain vitamin D";
}





// ১.১৩ - ইফ এলস, লিপ ইয়ার এবং কিভাবে জটিল কন্ডিশন গুলো শর্টকাটে লেখা যায়
$year = 2003;
if($year % 4 ==0 && $year % 100 ==0 && $year % 400 ==0){
    echo "{$year} is a leap year";
}else if($year % 4 ==0 && $year % 100 ==0){
    echo "{$year} is not a leap year";
}else if($year % 4 ==0){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}



echo "\n";

// উপরের  কোডগুলা সহজে একলাইনে এভাবে করা যায়। এটা smart way. but its not much readable or users
if($year % 4 == 0 && ($year % 100 !=100 || $year % 400 ==0)){
    echo "{$year} is a leap year";
}else{
    echo "{$year} is not a leap year";
}


/*
এটা PHP এভাবে Read korbe
year = 1200
if(true && (false || true)){
    echo "Its True";
}
*/







// ১.১৪ - নেস্টেড ইফ এলস এবং কোডের রিডেবিলিটি

$condition1 = true;
$condition2 = true;
$condition3 = false;
if($condition1){
    if($condition2){
        if($condition3){
            echo "Hey Pobitro";
        }else{
            echo "No 3"; //output = No 3
        }
    }else{
        echo "No 2";
    }
}else{
    echo "No 1";
}


echo "\n";

// Alternative এবং More Readable way for users:

if($condition1 && $condition2 && $condition3){
    echo "Hey Pobitro";
}else if($condition1 && $condition2){
    echo "No 3"; // output = No 3
}else if($condition1){
    echo "NO 2";
}else{
    echo "No 1";
}



   
// ১.১৫ - PHP টার্নারী অপারেটর এবং নেস্টেড টার্নারী অপারেটর নিয়ে কাজ করা

$n = 15;
if(15 == $n){
    echo "Number 15";
}else if (13 == $n){
    echo "Number 13";
}else{
    echo "Unknown Number";
}

echo "\n";

    // Alternative with Ternary operator:
    // $number = (15 == $n) ? "Number 15" : "Unknown Number";
    $number = (15 == $n) ? "Number 15" : ((13 == $n) ? "Number 13" : "Unknown Number");
    echo $number;

echo "\n";
if($n % 2 ==0){
    echo "{$n} is an Even Number";
}else{
    echo "{$n}is a Odd Number";
}

echo "\n";
// Alternative with ternary operator:
$result = ($n % 2 == 0) ? "{$n} is an Even Number" : "{$n}is a Odd Number";
echo $result;






// ১.১৯ - পিএইচপিতে অপারেটর প্রিসিডেন্স - কে আর আগে রান করে
// first || এটার প্রিসিডেন্স higher than = . এজন্য প্রথম টা true হবে। কিন্তু or অপারেটর lower than = এজন্য এটা false হবে 
    $f = false || true; // true
    $e = false or true; // ($e = false) or true / $e = false

    $f = true && false; // false
    $e = true and false; // ($e = true) and false / $e = true

    var_dump($f,$e);







// ১.২০ - পিএইচপিতে কন্ট্রোল স্ট্রাকচারের অল্টারনেটিভ সিনট্যাক্স নিয়ে আলোচনা    
    $n = 10;
    if($n % 2 ==0){
        echo "{$n} is an even number";
    }else{
        echo "{$n} is an odd number";
    }

    // এটা alternative এভাবে করতে পারিঃ
    echo PHP_EOL;
    if($n % 2 ==0):
        echo "{$n} is an even number";
    // else if(true): if else have have

    else:    
        echo "{$n} is an odd number";
    endif;    

    echo PHP_EOL;
