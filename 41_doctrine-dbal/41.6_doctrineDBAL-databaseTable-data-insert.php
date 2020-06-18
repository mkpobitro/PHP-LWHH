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
        $conn->insert( 'persons', ['name' => 'Raj', 'email' => 'raj@gmail.com'] );
        echo $conn->lastInsertId();

    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}