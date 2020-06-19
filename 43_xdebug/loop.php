<?php
for ( $i = 0; $i < 10; $i++ ) {
    $result = $i % 2 == 0 ? 'even' : 'odd';
    printf( "$i is %s\n", $result );
}