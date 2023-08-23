<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_denah where id_denah='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:denah.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='denah.php'><< Kembali ke halaman denah</a>";
}
?>