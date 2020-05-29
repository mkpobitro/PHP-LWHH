<?php
// error_reporting(0);
include_once "config.php";
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
mysqli_set_charset( $connection, 'utf8' );
if ( !$connection ) {
    throw new Exception( "Cannot connect to database" );
}
function getStatusMessage( $statusCode = 0 ) {
    $status = [
        '0' => '',
        '1' => "<span style=\"color:#E51F59; font-weight: 600;\">Duplicate Email Address</span>",
        '2' => "<span style=\"color:green; font-weight: 600;\">Data Inserted Successfully</span>",
        '3' => "<span style=\"color:#E51F59; font-weight: 600;\">User or Password Empty</span>",
        '4' => "<span style=\"color:#E51F59; font-weight: 600;\">Username and Password Didn't match</span>",
        '5' => "<span style=\"color:#E51F59; font-weight: 600;\">Username doesn't exist</span>",
        // '6' => "<span style=\"color:#E51F59; font-weight: 600;\">word or meaning empty</span>",
    ];
    return $status[$statusCode];
}

function getWords( $user_id, $search = null ) {
    global $connection;
    if ( $search ) {
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '{$search}%' ORDER BY word";
        // $query = "SELECT * FROM words WHERE user_id = '{$user_id}' AND word LIKE '%{$search}%' ORDER BY word";
    }else{
        $query = "SELECT * FROM words WHERE user_id = '{$user_id}' ORDER BY word";
    }

    $result = mysqli_query( $connection, $query );
    // $data = mysqli_fetch_assoc( $result );
    // return $data;
    $data = [];
    while ( $_data = mysqli_fetch_assoc( $result ) ) {
        array_push( $data, $_data );
    }
    return $data;
}