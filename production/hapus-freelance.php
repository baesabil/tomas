<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_freelance where id_freelance='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:freelance.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='freelance.php'><< Kembali ke halaman freelance</a>";
}
?>