<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_kategori_event where id_kategori_event='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:kategori-event.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='kategori-event.php'><< Kembali ke halaman Kategori Event</a>";
}
?>