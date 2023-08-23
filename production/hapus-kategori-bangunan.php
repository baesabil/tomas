<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_kategori_bangunan where id_kategori_bangunan='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:kategori-bangunan.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='kategori-bangunan.php'><< Kembali ke halaman Kategori Bangunan</a>";
}
?>