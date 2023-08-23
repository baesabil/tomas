<?php
require_once "method/method_freelance.php";
$freelance = new Freelance();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET["id_freelance"])) {
            // $nim=intval($_GET["nim"]);
            $id_freelance = $_GET["id_freelance"];
            $freelance->get_freelancebyid($id_freelance);
        } else {
            $freelance->get_freelance();
        }
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
