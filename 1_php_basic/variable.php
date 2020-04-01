<?php
//string
/*
$name = "Pobitro Raj";
//number
$age = 27;
$word = "age";
//using double($$)and it will be print 27;
echo $$word;
$question = "How are you?";

// Single কোটেশনের ভিতর variable এর আউট পুট প্রিন্ট করবে না
echo 'Hello '.$name;
// নতুন লাইনের জন্য \n ব্যবহার করতে হয়। আর এটা সব সময় ডাবল কোটেশনের ভিতরে রাখতে হবে। কারন এটা একটা Special Character
echo "\n";
// Double কোটেশনের ভিতর variable এর আউট পুট প্রিন্ট করবে
echo "Hello $name\n";
// এভাবে variable সেকেন্ড ব্রাকেটের ভিতর ও ইউস করতে পারি
echo "Hello {$name}, {$question}";

*/

    // পিএইচপি তে ভ্যারিয়েবলের মান সব সময় চেঞ্জ করা যায়
    $text = "hello world";
    echo $text;

    $text = "Welcome Bangladesh";
    echo $text;

    echo "\n";


    define("PI", 3.1416);
    //   এই কয়েকভাবে constant এর আউট পুট প্রিন্ট করতে পারি
    echo "value of PI =". PI;
    echo constant("PI");
    echo PI;

    //   এভাবেও Constant প্রিন্ট করতে পারি। এটা একটু এডভান্সড লেভেলের 
    $constant = "constant";
    echo "Value of PI = {$constant('PI')}";



  // single line comment
  
/*
    Multiple Line Comment 
    Line 1 
    Line 2
*/
## single line comment

