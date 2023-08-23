<?php
include "session.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tambah Event</title>

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
    <!-- Switchery -->
    <link href="../vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="../vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="../vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">

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
                                    <h2>Tambah Event</h2>
                                    <div class="clearfix"></div>
                                </div>
                                <div class="x_content">
                                    <br />
                                    <form class="form-horizontal form-label-left" method="post" action="" enctype="multipart/form-data">
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="kategori">Kategori Event <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select class="select2_single form-control col-md-7 col-xs-12" required="required" name="kategori">
                                                    <option value="0" hidden>-- Pilih Kategori Event --</option>
                                                    <?php
                                                    $sql = "SELECT * from tb_kategori_event order by id_kategori_event asc";
                                                    $result = mysqli_query($conn, $sql);
                                                    while ($row = mysqli_fetch_array($result)) {
                                                    ?>
                                                        <option value="<?= $row[0]; ?>"><?= $row[0] . " - " . $row[1]; ?></option>
                                                    <?php
                                                    }
                                                    ?>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="judul">Judul Event <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="judul" name="judul" data-validate-length-range="6" data-validate-words="2" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="deskripis">Deskripsi <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea id="deskripsi" required="required" name="deskripsi" class="form-control col-md-7 col-xs-12"></textarea>
                                                <!-- <div id="alerts"></div>
                                                <div class="btn-toolbar editor" data-role="editor-toolbar" data-target="#editor-one">
                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font"><i class="fa fa-font"></i><b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                        </ul>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Font Size"><i class="fa fa-text-height"></i>&nbsp;<b class="caret"></b></a>
                                                        <ul class="dropdown-menu">
                                                            <li>
                                                                <a data-edit="fontSize 5">
                                                                    <p style="font-size:17px">Huge</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-edit="fontSize 3">
                                                                    <p style="font-size:14px">Normal</p>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a data-edit="fontSize 1">
                                                                    <p style="font-size:11px">Small</p>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="bold" title="Bold (Ctrl/Cmd+B)"><i class="fa fa-bold"></i></a>
                                                        <a class="btn" data-edit="italic" title="Italic (Ctrl/Cmd+I)"><i class="fa fa-italic"></i></a>
                                                        <a class="btn" data-edit="strikethrough" title="Strikethrough"><i class="fa fa-strikethrough"></i></a>
                                                        <a class="btn" data-edit="underline" title="Underline (Ctrl/Cmd+U)"><i class="fa fa-underline"></i></a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="insertunorderedlist" title="Bullet list"><i class="fa fa-list-ul"></i></a>
                                                        <a class="btn" data-edit="insertorderedlist" title="Number list"><i class="fa fa-list-ol"></i></a>
                                                        <a class="btn" data-edit="outdent" title="Reduce indent (Shift+Tab)"><i class="fa fa-dedent"></i></a>
                                                        <a class="btn" data-edit="indent" title="Indent (Tab)"><i class="fa fa-indent"></i></a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="justifyleft" title="Align Left (Ctrl/Cmd+L)"><i class="fa fa-align-left"></i></a>
                                                        <a class="btn" data-edit="justifycenter" title="Center (Ctrl/Cmd+E)"><i class="fa fa-align-center"></i></a>
                                                        <a class="btn" data-edit="justifyright" title="Align Right (Ctrl/Cmd+R)"><i class="fa fa-align-right"></i></a>
                                                        <a class="btn" data-edit="justifyfull" title="Justify (Ctrl/Cmd+J)"><i class="fa fa-align-justify"></i></a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn dropdown-toggle" data-toggle="dropdown" title="Hyperlink"><i class="fa fa-link"></i></a>
                                                        <div class="dropdown-menu input-append">
                                                            <input class="span2" placeholder="URL" type="text" data-edit="createLink" />
                                                            <button class="btn" type="button">Add</button>
                                                        </div>
                                                        <a class="btn" data-edit="unlink" title="Remove Hyperlink"><i class="fa fa-cut"></i></a>
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn" title="Insert picture (or just drag & drop)" id="pictureBtn"><i class="fa fa-picture-o"></i></a>
                                                        <input type="file" data-role="magic-overlay" data-target="#pictureBtn" data-edit="insertImage" />
                                                    </div>

                                                    <div class="btn-group">
                                                        <a class="btn" data-edit="undo" title="Undo (Ctrl/Cmd+Z)"><i class="fa fa-undo"></i></a>
                                                        <a class="btn" data-edit="redo" title="Redo (Ctrl/Cmd+Y)"><i class="fa fa-repeat"></i></a>
                                                    </div>
                                                </div>

                                                <div id="editor-one" class="editor-wrapper"></div>

                                                <textarea name="descr" id="descr"></textarea> -->
                                            </div>
                                        </div>
                                        <div class="item form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="telephone">File <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="file" id="file" name="file" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-md-offset-3">
                                                <!-- <button type="submit" class="btn btn-primary">Cancel</button> -->
                                                <!-- <button id="send" type="submit" name="submit" class="btn btn-success">Submit</button> -->
                                                <input type="submit" name="submit" value="submit" class="btn btn-success">
                                            </div>
                                        </div>
                                    </form>

                                    <?php
                                    if (isset($_POST['submit'])) {
                                        $kategori = $_POST['kategori'];
                                        $judul = $_POST['judul'];
                                        $deskripsi = $_POST['deskripsi'];

                                        //get data file
                                        $nameFile = $_FILES['file']['name'];
                                        $tempName = $_FILES['file']['tmp_name'];

                                        // tentukan lokasi file akan dipindahkan
                                        $dirUpload = "images/event/";

                                        // pindahkan file
                                        $terupload = move_uploaded_file($tempName, $dirUpload . $nameFile);

                                        $query = "INSERT INTO tb_event (id_event, id_kategori_event, nim, judul_event, deskripsi, file) VALUES (NULL, '$kategori','".$_SESSION['nim']."', '$judul', '$deskripsi', '$nameFile')";

                                        $sql = mysqli_query($conn, $query) or die(mysqli_error($conn));

                                        if ($sql) {
                                            echo "Berhasil Input Data";
                                        } else {
                                            echo "Gagal Input Data";
                                        }
                                        echo "<br><a href='event.php'><< Kembali ke halaman event</a>";
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
    <!-- bootstrap-progressbar -->
    <script src="../vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../vendors/moment/min/moment.min.js"></script>
    <script src="../vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="../vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="../vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="../vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="../vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="../vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="../vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="../vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="../vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="../vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="../vendors/starrr/dist/starrr.js"></script>
    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>

</body>

</html>