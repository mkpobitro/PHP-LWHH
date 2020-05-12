<?php
include_once "config.php";
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );

if ( !$connection ) {
    throw new Exception( "Cannot connect to Database" );
} else {
    $action = $_POST['action'] ?? '';
    if ( !$action ) {
        header( "location: index.php" );
    } else {
        if ( 'add' == $action ) {
            $task = $_POST['task'];
            $date = $_POST['date'];

            // echo $task;
            // echo $date;
            // die();

            if ( $task && $date ) { // for task and date insert
                $query = "INSERT INTO " . DB_TABLE . "(task, date) VALUES ('{$task}', '{$date}')";
                mysqli_query( $connection, $query );
                header( 'location: index.php?added=true' );
            }
        } elseif ( "complete" == $action ) { // for complete button
            $taskId = $_POST['completeTaskIdName'];
            if ( $taskId ) {
                $query = "UPDATE tasks SET complete = 1 WHERE id = {$taskId} LIMIT 1";
                mysqli_query( $connection, $query );
                header( "location: index.php" );
            }
        } elseif ( "delete" == $action ) { // for delete button
            $taskId = $_POST['deleteTaskIdName'];
            $query = "DELETE FROM `tasks` WHERE id={$taskId} LIMIT 1";
            mysqli_query( $connection, $query );
            header( "location: index.php" );
        } elseif ( "incomplete" == $action ) { // for incomplete button
            $taskId = $_POST['incompleteTaskIdName'];
            $query = "UPDATE tasks SET complete = 0 WHERE id = {$taskId} LIMIT 1";
            mysqli_query( $connection, $query );
            header( "location: index.php" );
        } elseif ( "bulkComplete" == $action ) {
            $taskIds = $_POST['taskIds'];
            // print_r( $taskIds );
            $_taskIds = join( ",", $taskIds );
            $query = "UPDATE tasks SET complete = 1 WHERE id in ($_taskIds)";
            mysqli_query( $connection, $query );
            header( "location: index.php" );
        } elseif ( "bulkDelete" == $action ) {
            $taskIds = $_POST['taskIds'];
            // print_r( $taskIds );
            $_taskIds = join( ",", $taskIds );
            $query = "DELETE FROM `tasks` WHERE id in ($_taskIds)";
            mysqli_query( $connection, $query );
            header( "location: index.php" );
        }
    }
}