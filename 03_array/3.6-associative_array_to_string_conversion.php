<?php
//# ৩.৬ - অ্যাসোসিয়েটিভ অ্যারে থেকে স্ট্রিংয়ে কনভার্সন - সিরিয়ালাইজ, জেসন
$students = array(
    'fname'      => 'Pobitro',
    'lname'      => 'Raj',
    'age'        => '24',
    'profession' => 'Developer',
);

// echo $students['fname']." ".$students['lname']."\n";
printf( "My Name is %s %s", $students['fname'], $students['lname'] );
echo PHP_EOL;

//associative array কে serialize করার জন্য যাতে সবগুলা key value দেখা যায়
$serialized = serialize( $students );
echo $serialized . "\n"; //output= a:4:{s:5:"fname";s:7:"Pobitro";s:5:"lname";s:3:"Raj";s:3:"age";s:2:"24";s:10:"profession";s:9:"Developer";}

//unserialize ফাংশনের মাধ্যমে আবারো array তে ব্যাক করা
$unserialized = unserialize( $serialized );
print_r( $unserialized );

//এটা javaScript এর json format এ সেভ করে । এটা javaScript ডিরেক্টলি ইউস করতে পারবে। সো এটার ইউজাবিলিটি অনেক বেশি ।
$jsondata = json_encode( $students );
echo $jsondata; // output = {"fname":"Pobitro","lname":"Raj","age":"24","profession":"Developer"}

//এটাকে array তে ফিরিয়ে আনতে হলে । এটাকে বলে দেওয়া হয়েছে তুমে json_decode() করার সময় এটাকে array হিসেবে ফিরিয়ে নিয়ে আসো
$arrayJson = json_decode( $jsondata );
print_r( $arrayJson );






