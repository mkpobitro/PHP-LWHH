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
        // $conn->executeUpdate("UPDATE persons SET email = ? WHERE id = ?", ['pobb@gmail.com', 1]);
        
        $conn->update('persons', ['email'=>'pobitro@gmail.com'], ['id'=>1]);

    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}