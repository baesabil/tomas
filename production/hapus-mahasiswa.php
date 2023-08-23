<?php
include "koneksi.php";
$nim = $_GET['nim'];
$query = "Delete from tb_mahasiswa where nim='$nim'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:mahasiswa.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='mahasiswa.php'><< Kembali ke halaman mahasiswa</a>";
}
?>