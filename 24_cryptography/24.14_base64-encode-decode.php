<?php
$text = "Quick brown fox jumps the lazy dog";
//encode
$encodedText = base64_encode( $text );
echo $encodedText;

echo PHP_EOL;
//decode
echo base64_decode( $encodedText );