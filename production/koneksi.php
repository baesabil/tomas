<?php
    $servername = "localhost"; // Nama Server
    $username = "root"; // Username XAMPP
    $password = ""; // Password XAMPP
    $db_name="db_tomas"; // Nama DB

    //Membuat Koneksi
    $conn = new mysqli($servername, $username, $password, $db_name);
    
    //Cek Koneksi
    if($conn->connect_error){
        die("Connection Failed".$conn->connect_error);
    }else{
        // echo "connection success";
    }
?>