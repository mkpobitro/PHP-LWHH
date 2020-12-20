<?php

// #### ৩.৮ - অ্যাসোসিয়েটিভ অ্যারে থেকে ডেটা রিমুভ করা ###

$name = array( 'fname' => 'Pobitro', 'lname' => 'Raj' );
print_r( $name );

unset( $name['lname'] );
print_r( $name );
