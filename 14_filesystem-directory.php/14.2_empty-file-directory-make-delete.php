<?php

mkdir( "hello", 0777, true );
file_put_contents( "hello/h.txt", "hello world" );
sleep( 10 );
// unlink( "hello/h.txt" );
// rmdir( "hello" );

deleteDir( getcwd() . "/" . "hello" );

function deleteDir( $path ) {
    $filesPath = scandir( $path );
    if ( count( scandir( $path ) ) > 2 ) {
        foreach ( $filesPath as $file ) {
            if ( "." != $file && ".." != $file ) {
                $filesPath = $path . "/" . $file;
                unlink( $filesPath );
            }
        }
    }
    rmdir( $path );
}