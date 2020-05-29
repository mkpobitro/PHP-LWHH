<?php 
echo "Welcome to the CURL Library PHP";
if(isset($_POST['secret']) && 'noodles' == $_POST['secret']){
    echo "<br>Please have some noodles";
}
