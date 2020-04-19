<?php
// date_default_timezone_set( "Asia/Kolkata" );
date_default_timezone_set( "Asia/Dhaka" );
// echo date( 'd/m/y' )."\n';

// echo date( 'd/m/Y' ) . "\n";

// echo date( 'd/M/Y' ) . "\n";

// echo date( 'dS M, Y' ) . "\n";

// echo date( 'dS F, Y' ) . "\n";

//date(‘ds F, Y h:i:s’) [ Date এর সাথে যদি Time ও দেখতে চাই GMT Time zone এ দেখাচ্ছে ]
echo date( 'dS F, Y h:i:s' ) . "\n";

//date(‘ds F, Y H:i:s’) [24 hours format]
echo date( 'dS F, Y H:i:s' ) . "\n";

//date(‘ds F, Y H:i:s A’) [ AM/PM দেখতে চাইলে ]
echo date( 'dS F, Y h:i:s A' ) . "\n";

//date(‘z’) এ বছরের কত তম দিন
echo date( 'z' ) . "\n";

//date(‘t’) Current Month কত দিনের চেক করতে
echo date( 't' ) . "\n";

//time()+12*60*60 [ স্পেসিফিক কিছু টাইম বাড়াতে চাইলে ]
echo date( 'dS F, Y h:i:s A', time() + 48 * 60 * 60 ) . "\n";
