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
        $statement = $conn->prepare( "SELECT * FROM students WHERE section = ? AND class= ? " );
        //1st Way:
        $statement->bindValue( 1, 'A' );
        $statement->bindValue( 2, 2 );
        $statement->execute();
        // print_r( $statement->fetchAll() );

        //2nd Way:
        $section = 'C';
        $class = 2;
        $statement->bindParam( 1, $section );
        $statement->bindParam( 2, $class );
        $statement->execute();
        // print_r( $statement->fetchAll() );

        //3rd Way:
        $result = $conn->executeQuery( "SELECT * FROM students WHERE section = ? AND class= ? ", ['D', 8] );
        print_r( $result->fetchAll() );
    }
} catch ( Exception $e ) {
    echo "DB Connection Failed";
}