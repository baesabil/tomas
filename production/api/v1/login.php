<?php
require_once "method/method_login.php";
$lgn = new Login();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'POST';
        $lgn->get_login();
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
