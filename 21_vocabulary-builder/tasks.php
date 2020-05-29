<?php
session_start();
include_once "config.php";
$action = $_POST['action'] ?? '';
$connection = mysqli_connect( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME );
mysqli_set_charset( $connection, 'utf8' );
if ( !$connection ) {
    throw new Exception( "Cannot connect to database" );
} else {
    //Registration Form
    if ( "register" == $action ) {
        $username = $_POST['email'] ?? '';
        $password = $_POST['password'] ?? '';

        if ( $username && $password ) {
            $hashPassword = password_hash( $password, PASSWORD_BCRYPT );
            $query = "INSERT INTO users (email, password) VALUES ('{$username}','{$hashPassword}')";
            mysqli_query( $connection, $query );

            if ( mysqli_error( $connection ) ) {
                $status = 1;
            } else {
                $status = 2;
            }
        } else {
            $status = 3;
        }
        header( "location: index.php?status={$status}" );
    } //Login Form
    elseif ( "login" == $action ) {
        $username = $_POST['email'];
        $password = $_POST['password'];
        if ( $username && $password ) {
            $query = "SELECT id, password FROM users WHERE email= '{$username}'";
            $result = mysqli_query( $connection, $query );
            if ( mysqli_num_rows( $result ) > 0 ) {
                $data = mysqli_fetch_assoc( $result );
                $_password = $data['password'];
                $_id = $data['id'];
                if ( password_verify( $password, $_password ) ) {
                    $_SESSION['id'] = $_id;
                    header( "location: words.php" );
                    die();
                } else {
                    $status = 4;
                    // echo "Username and Password Didn't match";
                }
            } else {
                $status = 5;
                // echo "Username doesn't exist";
            }
        } else {
            $status = 3;
            // echo "Username & password Empty";
        }
        header( "location: index.php?status={$status}" );
    } // Add New Word
    elseif ( "addword" == $action ) {
        $word = $_POST['word'] ?? '';
        $meaning = $_POST['meaning'] ?? '';
        $user_id = $_SESSION['id'] ?? 0;
        if ( $word && $meaning && $user_id ) {
            $query = "INSERT INTO words (user_id, word, meaning) VALUES ('{$user_id}', '{$word}','{$meaning}') ";
            mysqli_query( $connection, $query );
        }
        header( "location: words.php" );
    }
}