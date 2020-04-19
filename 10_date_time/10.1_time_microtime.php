<?php

echo time() . "\n";

echo date( 'd/F/y' ) . "\n";

echo microtime( true ) . "\n";

//PHP কত সময়ের মধ্যে আমাদের কাজ টা করছে তা আমরা এভাবে চেক করে দেখতে পারি

$startTime = microtime( true );

for ( $i = 0; $i <= 100; $i++ ) {
    echo $value = $i;
}

$endTime = microtime( true );

echo "\n";
echo $executionTime = ( $endTime - $startTime );
