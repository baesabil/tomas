<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_gambar_denah where id_gambar_denah='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:gambar-denah.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='gambar-denah.php'><< Kembali ke halaman gambar denah</a>";
}
?>