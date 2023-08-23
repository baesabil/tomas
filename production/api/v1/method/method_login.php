<?php
//https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/

class Login
{
    public function get_login()
    {
        include "../../koneksi.php";
        $arrcheckpost = array('username' => '', 'password' => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if ($hitung == count($arrcheckpost)) {

            $username = $_POST['username'];
            $password = md5($_POST['password']);
            $sql = "SELECT * FROM tb_login WHERE username='$username' && password='$password'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);

            if ($count > 0) {

                $sql_bio = "SELECT * FROM tb_mahasiswa WHERE nim='".$row['nim']."'";
                $result_bio = mysqli_query($conn, $sql_bio);
                $row_bio = mysqli_fetch_assoc($result_bio);
                $response = array(
                    'status' => 1,
                    'message' => 'Success Login',
                    'nim' => $row['nim'],
                    'nama' => $row_bio['nama']
                );
            } else {
                $response = array(
                    'status' => 0,
                    'message' => 'username not found.'
                );
            }
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Please insert username / password'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
