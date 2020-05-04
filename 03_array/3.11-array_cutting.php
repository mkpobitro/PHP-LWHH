<?php
//###################### ৩.১১ - অ্যারেকে কাটাকাটি করা ################################

$fruits = array('banana', 'mango', 'apple', 'orange', 'plum');

// যদি কাটা জাইগাই নতুন কিছু যোগ করতে করতে চাই
$newJoin = array('pineapple', 'jackfruit');
$newFruits = array_splice($fruits, 2, 2, $newJoin);

print_r($fruits); //  [0] => banana [1]=>mango [2]=>pineapple [3]=>jackfruit [4]=>plum
print_r($newFruits); // [0]=>apple [1]=>orange

