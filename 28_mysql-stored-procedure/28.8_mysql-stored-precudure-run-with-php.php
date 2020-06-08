<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'lwhh_mysql');

$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

$query = "CALL get_students_by_class_and_section(5, 'B');";
$result = mysqli_query($conn, $query);
echo mysqli_num_rows($result);

while($data = mysqli_fetch_assoc($result)){
    print_r($data);
}
