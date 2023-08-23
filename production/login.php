<!DOCTYPE html>
<html lang="en">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <!-- Meta, title, CSS, favicons, etc. -->
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>Gentelella Alela! | </title>

  <!-- Bootstrap -->
  <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- NProgress -->
  <link href="../vendors/nprogress/nprogress.css" rel="stylesheet">
  <!-- Animate.css -->
  <link href="../vendors/animate.css/animate.min.css" rel="stylesheet">

  <!-- Custom Theme Style -->
  <link href="../build/css/custom.min.css" rel="stylesheet">
</head>

<body class="login">
  <div>
    <a class="hiddenanchor" id="signup"></a>
    <a class="hiddenanchor" id="signin"></a>

    <div class="login_wrapper">

      <div class="animate form login_form">
        <center>
          <img src="images/tomas.png" alt="..." width="200px">
        </center>
        <section class="login_content">

          <form method="POST">
            <h1>Login Form</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" name="username" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" name="password" />
            </div>
            <div>
              <!-- <a class="btn btn-default submit" href="index.html">Log in</a> -->
              <!-- <a class="reset_pass" href="#">Lost your password?</a> -->
              <input type="submit" value="Log in" name="submit" class="btn btn-default submit" style="float:none !important;margin-left:none !important;">
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <!-- <p class="change_link">New to site?
                  <a href="#signup" class="to_register"> Create Account </a>
                </p>

                <div class="clearfix"></div> -->
              <br />

              <div>

                <p>©2022 Gentelella Alela - Tomas.</p>
              </div>
            </div>
          </form>
          <?php
          session_start();
          include "koneksi.php";
          if (isset($_POST['submit'])) {
            $username = $_POST['username'];
            $password = ($_POST['password']);
            // echo $username;
            // echo $password;die();

            $sql = "SELECT * FROM tb_login WHERE username='$username' && password='$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            // if (mysqli_num_rows($result) == 1) {
            if (($row['nim'] == 0) && ($row['status'] == 1)) {
              $_SESSION['username'] = $username;
              $_SESSION['nim'] = $row['nim'];
              if ($row['nim'] != null || $row['nim'] != "") {
                $sql2 = "SELECT * from tb_kategori_login WHERE id_kategori_login = '" . $row['id_kategori_login'] . "'";
                $result2 = mysqli_query($conn, $sql);
                $row2 = mysqli_fetch_assoc($result2);
                $_SESSION['id_kategori_login'] = $row2['id_kategori_login'];
                $_SESSION['kategori_login'] = $row2['kategori_login'];
              } else {
                $_SESSION['id_kategori_login'] = "0";
              }

          ?>
              <script language="javascript">
                alert("Success Login!");
                document.location = 'index.php'
              </script>
            <?php
            } else {
            ?>
              <script language="javascript">
                alert("Username / Password Failed!");
                document.location = 'login.php'
              </script>
          <?php
            }
          }
          ?>
        </section>
      </div>

      <!-- <div id="register" class="animate form registration_form">
        <section class="login_content">
          <form>
            <h1>Create Account</h1>
            <div>
              <input type="text" class="form-control" placeholder="Username" required="" />
            </div>
            <div>
              <input type="email" class="form-control" placeholder="Email" required="" />
            </div>
            <div>
              <input type="password" class="form-control" placeholder="Password" required="" />
            </div>
            <div>
              <a class="btn btn-default submit" href="index.html">Submit</a>
            </div>

            <div class="clearfix"></div>

            <div class="separator">
              <p class="change_link">Already a member ?
                <a href="#signin" class="to_register"> Log in </a>
              </p>

              <div class="clearfix"></div>
              <br />

              <div>
                <h1><i class="fa fa-paw"></i> Gentelella Alela!</h1>
                <p>©2016 All Rights Reserved. Gentelella Alela! is a Bootstrap 3 template. Privacy and Terms</p>
              </div>
            </div>
          </form>
        </section>
      </div> -->
    </div>
  </div>
</body>

</html>