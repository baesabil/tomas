<?php
require_once "method/method_event.php";
$event = new Event();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id_event"])) {
            // $nim=intval($_GET["nim"]);
            $id_event = $_GET["id_event"];
            $event->get_eventbyid($id_event);
        } else {
            $event->get_event();
        }
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
