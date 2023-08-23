<?php
require_once "method/method_gambardenah.php";
$gbr = new Gambardenah();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        $gbr->get_gambardenah();
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
