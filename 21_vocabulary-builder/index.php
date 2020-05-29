<?php
    session_start();
    $_user_id = $_SESSION['id'] ?? 0;
    if ( $_user_id ) {
        header( "location: words.php" );
    }
    include_once "functions.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vocabulary Builder</title>
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/milligram/1.3.0/milligram.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container" id="main">
        <h1 class="maintitle">
            <i class="fas fa-language"></i> <br>My Vocabularies
        </h1>

        <div class="row navigation">
            <div class="column column-60 column-offset-20">
                <div class="formaction">
                    <a href="#" id="login">Login</a> | <a href="#" id="register">Register Account</a>
                </div>
                <div class="formc">
                    <form id="form01" action="tasks.php" method="post">
                        <h3>Login</h3>
                        <fieldset>
                            <label for="email">Email</label>
                            <input type="email" placeholder="Email Address" id="email" name="email">
                            <label for="password">Password</label>
                            <input type="password" placeholder="Password" id="password" name="password">

                            <p>
                            <?php
                                $status = $_GET['status'] ?? 0;
                                if ( $status ) {
                                    echo getStatusMessage( $status );
                                }
                            ?>
                            </p>
                            <input class="button" type="submit" value="Submit">
                            <input type="hidden" name="action" id="action" value="login">
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="assets/js/script.js"></script>
</html>