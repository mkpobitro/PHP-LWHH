<?php
    // session_name('loggedin');
    session_start();
    $error = false;
    $_SESSION['loggedin'] = false;

    $username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
    $password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );

    $fp = fopen( 'data/users.txt', 'r' );

    if ( $username && $password ) {
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        $_SESSION['role'] = false;
        while ( $data = fgetcsv( $fp ) ) {
            if ( $data[0] == $username && $data[1] == md5( $password ) ) {
                $_SESSION['loggedin'] = true;
                $_SESSION['user'] = $username;
                $_SESSION['role'] = $data[2];
                header( 'location: index.php' );
            }
        }
        if ( !$_SESSION['loggedin'] ) {
            $error = true;
        }
    }

    if ( isset( $_GET['logout'] ) ) {
        $_SESSION['loggedin'] = false;
        $_SESSION['user'] = false;
        $_SESSION['role'] = false;
        session_destroy();
        header( 'location: index.php' );
    }

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container crud-project m-auto w-50">


        <div class="row">
            <div class="project-heading mt-5">
                <h1>Simple Auth Example</h1>
                <?php
                    if ( true == $_SESSION['loggedin'] ) {
                        echo "Hello Admin, Welcome";
                    } else {
                        echo "Hello Stranger, Login Below";
                    }
                ?>
                <hr>
            </div>
        </div>


        <div class="add-new w-75">
            <?php
                if ( $error ) {
                    echo "<blockquote class='text-danger'>| Username and Password didn't match</blockquote>";
                }
            if ( false == ( $_SESSION['loggedin'] ) ): ?>
            <form action="" method="POST">
                <label for="fname">Username</label>
                <input type="text" id="fname" name="username" class="form-control" required>

                <label for="pass">Password</label>
                <input type="password" id="pass" name="password" class="form-control" required>

                <button type="submit" name="submit" class="btn btn-primary mt-3">Submit</button>
            </form>
            <?php
                else:
            ?>
            <form action="auth.php" method="POST">
                <input type="hidden" name="logout" value="1">
                <button type="submit" name="submit" class="btn btn-primary mt-3">Log Out</button>
            </form>
            <?php endif;?>
        </div>

    </div>
</body>

</html>