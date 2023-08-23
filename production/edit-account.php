<?php
include "session.php";
$id = $_GET['id'];

$query = "SELECT * FROM tb_login WHERE id_login=$id";

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

    <title>Tambah Account</title>

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
    <!-- Select2 -->
    <link href="../vendors/select2/dist/css/select2.min.css" rel="stylesheet">

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
                                    <h2>Tambah Account</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left" method="post" action="">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="NIM">NIM <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <!-- <input type="email" id="email" name="email" required="required" class="form-control col-md-7 col-xs-12"> -->
                                                <select class="form-control col-md-7 col-xs-12" required="required" id="nim" name="nim" disabled>
                                                    <option value="0">-- NIM Mahasiswa --</option>
                                                    <?php
                                                    $sql = "SELECT nim, nama from tb_mahasiswa where nim='" . $row['nim'] . "'";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row_mahasiswa = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?= $row_mahasiswa[0]; ?>" selected><?= $row_mahasiswa[0] . " - " . $row_mahasiswa[1]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="username">Username <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="username" name="username" data-validate-length-range="6" data-validate-words="2" value="<?= $row['nim']; ?>" class="form-control col-md-7 col-xs-12" readonly>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label for="password" class="control-label col-md-3">Password</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="password" type="password" name="password" data-validate-length="6,8" class="form-control col-md-7 col-xs-12" value="<?= $row['nim']; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="Status">Status <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control col-md-7 col-xs-12" required="required" name="status">
                                                    <option value="0" hidden>-- Status Akses Login --</option>
                                                    <?php
                                                    if ($row['status'] == 1) {
                                                    ?>
                                                        <option value="1" selected>1</option>
                                                        <option value="2">2</option>
                                                    <?php
                                                    } else {
                                                    ?>
                                                        <option value="1">1</option>
                                                        <option value="2" selected>2</option>
                                                    <?php
                                                    }
                                                    ?>

                                                </select>
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
                                        $status = $_POST['status'];

                                        $query = "UPDATE tb_login SET status='$status' where nim='".$row['nim']."'";

                                        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                        if ($sql) {
                                            echo "Berhasil Edit Data";
                                        } else {
                                            echo "Gagal Edit Data";
                                        }
                                        echo "<br><a href='account.php'><< Kembali ke halaman account login</a>";
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
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>


    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()
        })
    </script>
</body>

</html>