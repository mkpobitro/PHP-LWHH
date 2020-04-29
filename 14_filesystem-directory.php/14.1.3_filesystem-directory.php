<?php
// Directory & Files গুলা যদি অরগানাইজ ভাবে বের করতে চাই, যেমনঃ getDirectories এবং getFiles দিয়েই সবগুলা দেখতে পাবো, তাহলে এভাবে করতে পারি

class Dir {
    public $directories = [];
    public $files = [];
    function __construct( $path ) {
        if ( is_readable( $path ) ) {
            $entries = scandir( $path );
            foreach ( $entries as $entry ) {
                if ( "." != $entry && ".." != $entry ) {
                    if ( is_dir( $path . DIRECTORY_SEPARATOR . $entry ) ) {
                        array_push( $this->directories, $entry );
                    } else {
                        array_push( $this->files, $entry );
                    }
                }
            }
        }
    }

    function getDirectory( $index ) {
        if ( isset( $this->directories[$index] ) ) {
            return new Dir( $this->directories[$index] );
        } else {
            throw new Exception( "Directory doesn't exist" );
        }
        return false;
    }

    function getDirectories() {
        return $this->directories;
    }
    function getFiles() {
        return $this->files;
    }

}

$directory = new Dir( getcwd() );
print_r( $directory->getDirectories() );
print_r( $directory->getFiles() );

$string = $directory->getDirectory( 11 );
print_r( $string->getDirectories() );
print_r( $string->getFiles() );

$sc = $directory->getDirectory( 14 );
print_r( $sc );