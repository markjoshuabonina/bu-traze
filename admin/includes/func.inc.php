<?php



    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Allow-Max-Age: 3600');
    header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");



function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}