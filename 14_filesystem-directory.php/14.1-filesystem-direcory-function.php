<?php

$entries = scandir( getcwd() );
foreach ( $entries as $entry ) {
    if ( "." != $entry && ".." != $entry ) {
        if ( is_dir( $entry ) ) {
            echo "[d] {$entry}\n";
        } else {
            echo "[f] {$entry}\n";
        }
    }
}

//একটা ফাংশন লিখেন, যেটা দিয়ে কারেন্ট ডিরেক্টরির মধ্যে কতগুলা ডিরেক্টরি আছে সেটা বের যাবেঃ

function countDir( $dir ) {
    $count = 0;
    $entries = scandir( $dir );
    foreach ( $entries as $entry ) {
        if ( "." != $entry && ".." != $entry ) {
            if ( is_dir( $entry ) ) {
                $count++;
            }
        }
    }
    return $count;
}

echo countDir( getcwd() );