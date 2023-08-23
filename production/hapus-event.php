<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_event where id_event='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:event.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='event.php'><< Kembali ke halaman event</a>";
}
?>