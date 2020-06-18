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
       /* $qb->insert( 'persons' )
            ->values( ['name'=>'?', 'email'=>'?'])
            ->setParameter(1, 'Hasu')
            ->setParameter(2, 'alam@gmail.com')
            ->execute(); */

        /* $qb->update('persons')
           ->set('email', '?')
           ->where('id = ?')
           ->setParameter(1, 'hasu@gmail.com')
           ->setParameter(2, 4)
           ->execute();  */
           
        $qb->delete('persons')
           ->where('id = ?')
           ->setParameter(1, 3)
           ->execute();

        echo $qb->getSQL() . PHP_EOL;
        // print_r( $qb->execute()->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}