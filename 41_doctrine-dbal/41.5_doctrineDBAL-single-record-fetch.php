<?php
require_once "vendor/autoload.php";
$connectionParams = array(
    'dbname'   => 'lwhh_mysql',
    'user'     => 'root',
    'password' => '',
    'host'     => 'localhost',
    'driver'   => 'mysqli', //pdo_mysql
 );
$conn = \Doctrine\DBAL\DriverManager::getConnection( $connectionParams );

try {
    if ( $conn->connect() ) {
        $query = "SELECT * FROM students WHERE section = 'D' AND class = 5";
        $data = $conn->fetchArray( $query );
        // $data = $conn->fetchAssoc( $query );
        print_r( $data );

        $query = "SELECT count(*) FROM students WHERE section = 'D' AND class = 5";
        $data = $conn->fetchColumn( $query );
        print_r( $data );

    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}