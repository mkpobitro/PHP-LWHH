<?php

//# ৩.২ - অ্যারে ম্যানিপুলেশন ####

$students = array( "rahim", "karim", "alam" );

$students[1] = "pobitro"; // value override

$students[] = "kamal"; // new data added
array_unshift( $students, "addfirstValue" ); // added new data on first line
array_push( $students, "addLastValue" ); // added new data in last line

array_shift( $students ); // removed first line data from array
array_pop( $students ); // removed last line data from array

print_r( $students );


