<?php
// date_default_timezone_get( 'Asia/dhaka' );
echo mktime( 0, 0, 0, 12, 12, 1999 ) . "\n";
echo strtotime( "12 December, 1999" ) . "\n";

echo time() . "\n";
echo strtotime( "now" ) . "\n";

//৩ দিন পরের টাইমস্ট্যাম্প দেখতে চাইলে
echo strtotime( "+3days" ) . "\n";

echo ( strtotime( "+3days" ) - strtotime( "now" ) ) / ( 24 * 60 * 60 );
