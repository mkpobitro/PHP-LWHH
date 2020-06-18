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
        $qb->select( '*' )
            ->from( 'students' )
            ->where( 'section = ? and class = ?' )
            ->orWhere('section = ? and class = ?')
            ->setParameter( 1, 'A' )
            ->setParameter( 2, 7 )
            ->setParameter( 3, 'C' )
            ->setParameter( 4, 4 );

        echo $qb->getSQL().PHP_EOL;
        print_r($qb->execute()->fetchAll());
    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}