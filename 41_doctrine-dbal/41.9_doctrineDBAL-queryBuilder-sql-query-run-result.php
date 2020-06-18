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
$qb = $conn->createQueryBuilder();
try {
    if ( $conn->connect() ) {
        $qb->select('*')->from('students')->where('section="A"')->setMaxResults(10);
        $result = $qb->execute()->fetchAll();
        print_r($result);
    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}