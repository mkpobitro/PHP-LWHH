<?php

$fname = "Pobitro";
$lname = "Raj";
// এখানে %s হচ্ছে string. এখানে যতগুলা %s থাকেবে ততগুলা মান থাকতে হবে। নাহলে warning শো করবে
printf("My Name is %s %s", strtoupper($fname),$lname);


// এভাবে printf দিয়ে অর্ডার পরিবর্তন করা যায়ঃ
// এটাকে Variable Swapping বলে ।
$fname = "Rony";
$middle = "Developer";
$lname = "kader";
// এটি ডাবল কোটেশনের ভিতর রাখলে PHP এটিকে variable হিসেবে কাউন্ট করতে চাইবে। এজন্য সিংগেল কোটেশনের ভিতরে রাখতে হবে
printf('His name is %3$s %1$s %2$s',$fname, $middle, $lname); //argument

// Printf দিয়ে এভাবে একটা argument পাস করে decimal থেকে binary মান নিতে পারি
printf('The binary equivalent of %1$d is %1$b', 12);




// দশমিকের পরের একাধিক সংখ্যাকে ২ সংখ্যায় নিতে চাইলে
$n = 56.2364;
printf("%.2f",$n); // output = 56.24


    // 0 প্যাডিং দিয়ে ৪ ঘরে প্রিন্ট করতে চাইলেঃ
    $m = 123;
    $n = 34;
    printf("%04d \n",$m); //output = 0123
    printf("%04d \n",$n); //output = 0034
    // আর এটাতে যদি দশমিক থাকতঃ
    $m = 123.567;
    $n = 34.121;
    printf("%07.2f \n",$m); //output = 0123.57
    printf("%07.2f \n",$n); //output = 0034.12

