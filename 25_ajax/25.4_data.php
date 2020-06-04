<?php
$data = $_REQUEST;
$data['result'] = 'success';
$data['method'] = $_SERVER['REQUEST_METHOD'];
echo json_encode( $data, JSON_PRETTY_PRINT );