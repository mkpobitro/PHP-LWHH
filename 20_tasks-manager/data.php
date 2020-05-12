<?php

include_once "config.php";

$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
if ( !$connection ) {
    throw new Exception( "Cannot connect to database" );
} else {
    echo "Database Cannected<br>";
    //insert Data
    mysqli_query( $connection, "INSERT INTO tasks (task, date) VALUES ('something more', '2020-04-7')" );

    //Showing All Data
    // $result = mysqli_query($connection, "SELECT * FROM tasks");
    // while($data = mysqli_fetch_assoc($result)){
    //         echo "<pre>";
    //         print_r($data);
    //         echo "</pre>";
    //     }

    //for delete
    // mysqli_query($connection, "DELETE FROM `tasks`");

}
mysqli_close( $connection );