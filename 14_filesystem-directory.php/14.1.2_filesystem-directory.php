<?php
//opendir()  || readdir() [এভাবেও file & directory বের করতে পারি]
$entries = opendir( getcwd() );
while ( false != ( $entry = readdir( $entries ) ) ) {
    echo $entry . "\n";
}

//একটা ফাংশন লিখেন, যেটা দিয়ে কারেন্ট ডিরেক্টরির মধ্যে কতগুলা ডিরেক্টরি আছে সেটা বের যাবেঃ
function countDir( $dir ) {
    $count = 0;
    $entries = opendir( getcwd() );
    while ( false != ( $entry = readdir( $entries ) ) ) {
        $count++;
    }
    return $count;

}

echo countDir( getcwd() );