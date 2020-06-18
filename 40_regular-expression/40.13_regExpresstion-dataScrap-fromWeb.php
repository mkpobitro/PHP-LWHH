<?php

$markup = file_get_contents( "https://bn.wikipedia.org/wiki/%E0%A6%AC%E0%A6%BE%E0%A6%82%E0%A6%B2%E0%A6%BE%E0%A6%A6%E0%A7%87%E0%A6%B6%E0%A7%87%E0%A6%B0_%E0%A6%89%E0%A6%AA%E0%A6%9C%E0%A7%87%E0%A6%B2%E0%A6%BE%E0%A6%B8%E0%A6%AE%E0%A7%82%E0%A6%B9%E0%A7%87%E0%A6%B0_%E0%A6%A4%E0%A6%BE%E0%A6%B2%E0%A6%BF%E0%A6%95%E0%A6%BE" );
$pattern = '/<li><a href="\/wiki\/[^>]+>([^<]+)<\/a>/';
preg_match_all( $pattern, $markup, $matches );
print_r( array_slice( $matches[1], 0, 492 ) );