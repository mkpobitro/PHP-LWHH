<?php
$file = "D:\\Xampp\\htdocs\\php-lwhh\\7_file\\data\\data2.txt";
if ( is_writable( $file ) ) {
    // $existingData = file_get_contents( $file );
    $fp = fopen( $file, 'a' );

    // $data2 = fputs( $fp, $string );
    // fwrite( $fp, "Corona Virus\n" );

    // fwrite( $fp, $existingData );
    fwrite( $fp, "Covid-19\n" );
    fwrite( $fp, "Covid" );

    fclose( $fp );
}
