<?php
session_start();
include "koneksi.php";
//periksa apakah user telah login atau memiliki session
if (empty($_SESSION['username'])) {
?>
  <script language='javascript'>
    alert('Silahkan login Terlebih Dahulu');
    document.location = 'login.php'
  </script>
<?php
}
?>