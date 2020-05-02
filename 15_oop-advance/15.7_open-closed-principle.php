<?php

//bad practice
class FileDisplay {
    function display( $file, $fileType ) {
        if ( 'mp4' == $fileType ) {
            //display video
        } elseif ( 'mp3' == $fileType ) {
            //display Audio Player
        } else {
            //display text file
        }
    }
}

//এটাকে এভাবে লিখতে হবে

class FileDisplay {
    function display( FileInterface $file ) {
        $file->display();
    }
}

interface FileInterface {
    function display();
}

class ImageFile implements FileInterface {
    function display() {
        //take necessary steps to display image
    }
}
class VideoFile implements FileInterface {
    function display() {
        //take necessary steps to display Video
    }
}
class AudioFile implements FileInterface {
    function display() {
        //take necessary steps to display Audio
    }
}

$image = new ImageFile( "abc.jpg" );
$video = new VideoFile( "abc.mp4" );
$audio = new AudioFile( "abc.mp3" );
$fd = new FileDisplay();
$fd->display( $image );
$fd->display( $video );
$fd->display( $audio );