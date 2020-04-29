<?php

// $path = "D://Xampp//htdocs//php-lwhh//1_php_basic//printf.php";
$path = 'D:/Xampp/htdocs/php-lwhh/1_php_basic/printf.php';

echo "Basename: " . pathinfo( $path, PATHINFO_BASENAME );
echo "\n";
echo "Dirname: " . pathinfo( $path, PATHINFO_DIRNAME );
echo "\n";
echo "Extension: " . pathinfo( $path, PATHINFO_EXTENSION );
echo "\n";
echo "Filename: " . pathinfo( $path, PATHINFO_FILENAME );