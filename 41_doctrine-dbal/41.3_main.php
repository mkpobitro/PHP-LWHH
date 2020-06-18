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
        echo "DB Connected";
        //arbitary method
        // $result = $conn->query( "SELECT * FROM students WHERE section = 'A' AND class = 1 " );

        //Prepared Statement
        $result = $conn->executeQuery( "SELECT * FROM students WHERE section = ? AND class = ? ", array( 'A', 1 ) );
        // while ( $data = $result->fetch() ) {
        //     print_r( $result->fetch() );
        // }
        print_r( $result->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}