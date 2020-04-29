<?php
$size = 0;
$rdi = new RecursiveDirectoryIterator( "./", RecursiveDirectoryIterator::SKIP_DOTS );
$files = new RecursiveIteratorIterator( $rdi );
foreach ( $files as $file ) {
    if ( $file->isFile() ) {
        $size += $file->getSize();
    }
    // echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName() . "\n";
}

echo "Directory Size {$size} bytes";
echo PHP_EOL;
echo PHP_EOL;

//Directory থেকে যদি কোন স্পেসিফিক ফাইল খুজে বের করতে চাই
$rdi = new RecursiveDirectoryIterator( getcwd(), RecursiveDirectoryIterator::SKIP_DOTS );
$files = new RecursiveIteratorIterator( $rdi );
foreach ( $files as $file ) {

    if ( $file->getFileName() == "6.8_trim.php" ) {
        echo $file->getPath() . DIRECTORY_SEPARATOR . $file->getFileName();
    }
}