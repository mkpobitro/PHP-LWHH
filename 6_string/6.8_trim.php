<?php
//trim
$string = "  hello   \n ,";
echo $string = trim( $string, ' ,' );
echo "text";
echo PHP_EOL;

//ltrim
$string2 = " .welcome Bangladeh .";
echo $string2 = ltrim( $string2, ' .' );
echo PHP_EOL;

//rtrim
$string3 = " .welcome Bangladeh   ,";
echo $string3 = rtrim( $string3, ' ,' );
