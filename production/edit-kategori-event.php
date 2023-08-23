<?php
include "session.php";
$id = $_GET['id'];

$query = "SELECT * FROM tb_kategori_event WHERE id_kategori_event=$id";

$data = mysqli_query($conn, $query) or die($conn);

$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Edit Kategori Event</title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- iCheck -->
  <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">
  <!-- bootstrap-wysiwyg -->
  <link href="../vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="nav-md">
  <div class="container body">
    <div class="main_container">
      <?php
      include "menu.php";
      ?>

      <!-- page content -->
      <div class="right_col" role="main">
        <div class="">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title">
                  <h2>Edit Kategori Event</h2>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">
                  <br />
                  <form class="form-horizontal form-label-left" method="post" action="">
                    <div class="item form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori_event">Nama kategori <span class="required">*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" id="kategori" name="kategori" required="required" value="<?=$row['nama_kategori_event'];?>" class="form-control col-md-7 col-xs-12" >
                      </div>
                    </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-md-offset-3">
                        <button type="submit" class="btn btn-primary">Cancel</button>
                        <button id="send" type="submit" name="submit" class="btn btn-success">Submit</button>
                      </div>
                    </div>
                  </form>

                  <?php
                  if (isset($_POST['submit'])) {
                    $kategori = $_POST['kategori'];
                   
                    $query = "UPDATE tb_kategori_event SET nama_kategori_event='$kategori' where id_kategori_event='".$row['id_kategori_event']."'";

                    $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                    if ($sql) {
                        echo "Berhasil Edit Data";
                    } else {
                        echo "Gagal Edit Data";
                    }
                    echo "<br><a href='kategori-event.php'><< Kembali ke halaman Kategori Event</a>";
                  }
                  ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- /page content -->

      <?php
      include "footer.php";
      ?>
    </div>
  </div>

  <!-- jQuery -->
  <script src="../vendors/jquery/dist/jquery.min.js"></script>
  <!-- Bootstrap -->
  <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
  <!-- FastClick -->
  <script src="../vendors/fastclick/lib/fastclick.js"></script>
  <!-- NProgress -->
  <script src="../vendors/nprogress/nprogress.js"></script>

  <!-- Custom Theme Scripts -->
  <script src="../build/js/custom.min.js"></script>

</body>

</html>