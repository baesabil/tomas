<?php
include "koneksi.php";
$id = $_GET['id'];
$query = "Delete from tb_login where id_login='$id'";

$data = mysqli_query($conn,$query) or die($conn);

if($data){
    header("location:account.php");
}else{
    echo "data gagal dihapus";
    echo "<br><a href='account.php'><< Kembali ke halaman account login</a>";
}
?>