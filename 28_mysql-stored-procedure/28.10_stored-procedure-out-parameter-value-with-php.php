<?php 
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
$query = "CALL get_mfc_cs(9, 'A', @tm, @tf);";
mysqli_query($conn, $query);
$result = mysqli_query($conn, "SELECT @tm as totalMale, @tf as totalFemale;");
// print_r($result);

while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}

