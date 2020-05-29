<?php 
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);
}
?>

<html>
    <head>
        <title>Form Login</title>
    </head>
    <body>
    <?php 
        if(!isset($_SESSION['loggedin'])){ ?>
        <form action="" method="post">
            Username: <input type="text" name="user"><br>
            Password: <input type="password" name="password"><br>
            <button type="submit" name="submit">Submit</button>
        </form>
       
    <?php  
    }else{
        echo "Hello Pobitro, You are Logged in";
    } ?>


    <?php
    if(isset($_POST['submit'])){
        if('pobitro' == $_POST['user'] && '12345' == $_POST['password']){
            $_SESSION['loggedin'] = 1;
            echo "Successfull";
            // echo "<span style='color:green;'>Successfull</span>";
        }
    }
    ?>

    </body>
</html>