<?php

mkdir( "hello/h1/h2/h3", 0777, true );
file_put_contents( "hello/h.txt", "hello world" );
file_put_contents( "hello/h1/h.txt", "hello world" );
file_put_contents( "hello/h1/h2/h.txt", "hello world" );
file_put_contents( "hello/h1/h2/h3/h.txt", "hello world" );
sleep( 10 );
// unlink( "hello/h.txt" );
// rmdir( "hello" );

deleteDir( getcwd() . DIRECTORY_SEPARATOR . "hello" );

function deleteDir( $path ) {
    if ( !is_readable( $path ) ) {
        return;
    }
    $filesPath = scandir( $path );
    if ( count( scandir( $path ) ) > 2 ) {
        foreach ( $filesPath as $file ) {
            if ( "." != $file && ".." != $file ) {
                $filesPath = $path . DIRECTORY_SEPARATOR . $file;
                if ( is_dir( $filesPath ) ) {
                    deleteDir( $filesPath );
                } else {
                    unlink( $filesPath );
                }
            }
        }
    }
    rmdir( $path );
}