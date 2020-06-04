<?php
$json = "{\"country\":\"বাংলাদেশ\"}";
print_r(json_decode($json,1));

if(json_last_error()){
    echo json_last_error_msg();
}