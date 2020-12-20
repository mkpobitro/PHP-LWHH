<?php
//৩.৯ - এম্পটি ভ্যালু নিয়ে আলোচনা (ইম্পর্ট্যান্ট)
$name = 0;

if ( isset( $name ) ) {
    echo "Name is set"; // output
} else {
    echo "Name is not set";
}

echo PHP_EOL;

if ( empty( $name ) ) {
    echo "Name is empty"; // output
} else {
    echo "Name is not empty";
}

echo "\n";

if ( isset( $name ) && ( is_numeric( $name ) ) || $name != '' ) {
    echo "Name is set and its not empty"; //output
} else {
    "name is not set or it's empty";
}