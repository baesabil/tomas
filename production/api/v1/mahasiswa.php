<?php
require_once "method/method_mahasiswa.php";
$mhs = new Mahasiswa();
$request_method = $_SERVER["REQUEST_METHOD"];
switch ($request_method) {
    case 'GET':
        if (!empty($_GET["nim"])) {
            // $nim=intval($_GET["nim"]);
            $nim = $_GET["nim"];
            $mhs->get_mahasiswabynim($nim);
        } else {
            $mhs->get_mahasiswa();
        }
        break;
    case 'POST':
        if (!empty($_GET["nim"])) {
            $nim = $_GET["nim"];
            $mhs->update_mahasiswa($nim);
        } else {
            $mhs->insert_mahasiswa();
        }
        break;
    case 'DELETE':
        //   $nim=intval($_GET["nim"]);
        $nim = $_GET["nim"];
        $mhs->delete_mahasiswa($nim);
        break;
    default:
        // Invalid Request Method
        header("HTTP/1.0 405 Method Not Allowed");
        break;
}
