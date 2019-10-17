<?php
//######৩.৪ - স্ট্রিং থেকে অ্যারে এবং অ্যারে থেকে স্ট্রিং, মাল্টিপল ডেলিমিটার ######

// স্ট্রিং থেকে অ্যারে কনভার্ট
$sports = explode(", ", "cricket, football, handball, tennis"); // delimiter
var_dump($sports); // array(4)
echo $sports[1]; // cricket

echo PHP_EOL;
// অ্যারে থেকে স্ট্রিং কনভার্ট
$name = array('pobitro', 'kamal', 'rony');

$convertString = join(",", $name);
var_dump($convertString);// string(18) "pobitro,kamal,rony"



// আবার string / array এর ভিতর যদি কমার আগে স্পেস না থাকে সেক্ষেত্রে preg_split() ফাংশন ইউস করতে পারি

$newName = preg_split("/(, |,)/","bangladesh, india, pakistan,australia, newzeland");

$cString = join(", ",$newName);
echo count($newName); //5
