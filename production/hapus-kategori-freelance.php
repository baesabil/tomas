<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_kategori_freelance where id_kategori_freelance='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:kategori-freelance.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='kategori-freelance.php'><< Kembali ke halaman Kategori Freelance</a>";
}
?>