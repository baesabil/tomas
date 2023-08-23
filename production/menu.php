<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="index.php" class="site_title"> <span>Tools Of Mahasiswa</span></a>

        </div>

        <div class="clearfix"></div>

        <!-- menu profile quick info -->
        <div class="profile clearfix">
            <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
                <span>Hallo,</span>
                <h2><?= ucfirst($_SESSION['username']); ?></h2>
            </div>
            <div class="clearfix"></div>
        </div>
        <!-- /menu profile quick info -->

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">
                <ul class="nav side-menu">
                    <li><a><i class="fa fa-edit"></i> Data Mahasiswa <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="mahasiswa.php">Data Mahasiswa</a></li>
                            <li><a href="account.php">Account Login</a></li>
                            <li><a href="kategori-login.php">Kategori Login</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Kendaraan <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="jenis-kendaraan.php">Jenis Kendaraan</a></li>
                            <li><a href="merek-kendaraan.php">Merek Kendaraan</a></li>
                            <li><a href="tipe-kendaraan.php">Tipe Kendaraan</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Event <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="kategori-event.php">Kategori Event</a></li>
                            <li><a href="event.php">Event</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Freelance <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="kategori-freelance.php">Kategori Freelance</a></li>
                            <li><a href="freelance.php">Freelance</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Denah <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="kategori-bangunan.php">Kategori Bangunan</a></li>
                            <li><a href="gambar-denah.php">Gambar Denah</a></li>
                            <li><a href="denah.php">Denah</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Parking <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="area-parking.php">Area Parking</a></li>
                            <li><a href="parking.php">Parking</a></li>
                        </ul>
                    </li>
                    <li><a><i class="fa fa-edit"></i> Other's Data <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="agama.php">Agama</a></li>
                            <li><a href="report.php">Report</a></li>
                            <li><a href="grafik.php">Grafik</a></li>
                        </ul>
                    </li>
                    <li><a href="logout.php"><i class="fa fa-sign-out"></i>Logout</a>
                </ul>
            </div>

        </div>
        <!-- /sidebar menu -->


    </div>
</div>

<!-- top navigation -->
<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <!-- <img src="images/img.jpg" alt="">John Doe -->
                        Selamat Datang <?= ucfirst($_SESSION['username']); ?>
                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- /top navigation -->