<?php
/*https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/*/

class Mahasiswa
{
    public  function get_mahasiswa()
    {
        include "../../koneksi.php";
        $query = "SELECT * FROM tb_mahasiswa";
        $data = array();
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result)) {
            $data[] = $row;
        }
        $count = mysqli_num_rows($result);
        $response = array(
            'status' => 1,
            'message' => 'Get List Mahasiswa Successfully.',
            'result' => $count,
            'data' => $data

        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function get_mahasiswabynim($nim = 0)
    {
        include "../../koneksi.php";
        if ($nim != 0) {
            $query = "SELECT * FROM tb_mahasiswa";

            $query .= " WHERE nim=" . $nim . " LIMIT 1";

            $data = array();
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_object($result)) {
                $data[] = $row;
            }
            $response = array(
                'status' => 1,
                'message' => 'Get List Mahasiswa by NIM Successfully.',
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Failed get data mahasiswa.',
                'data' => array()
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function insert_mahasiswa()
    {
        include "../../koneksi.php";
        $arrcheckpost = array('nim' => '', 'id_jenis_kelamin' => '', 'id_agama' => '', 'nama' => '', 'tanggal_lahir'   => '', 'alamat'   => '', 'no_hp'   => '', 'email'   => '', 'tanggal_masuk'   => '', 'status_mahasiswa'   => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if ($hitung == count($arrcheckpost)) {

            $query = "INSERT INTO tb_mahasiswa SET
            nim = '$_POST[nim]',
            id_jenis_kelamin = '$_POST[id_jenis_kelamin]',
            id_agama = '$_POST[id_agama]',
            nama = '$_POST[nama]',
            tanggal_lahir = '$_POST[tanggal_lahir]',
            alamat = '$_POST[alamat]',
            no_hp = '$_POST[no_hp]',
            email = '$_POST[email]',
            tanggal_masuk = '$_POST[tanggal_masuk]',
            status_mahasiswa = '$_POST[status_mahasiswa]'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if ($result) {
                $response = array(
                    'status' => 1,
                    'message' => 'Mahasiswa Added Successfully.'
                );
            } else {
                $response = array(
                    'status' => 0,
                    'message' => 'Mahasiswa Addition Failed.'
                );
            }
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    function update_mahasiswa($nim)
    {
        include "../../koneksi.php";
        $arrcheckpost = array('id_jenis_kelamin' => '', 'id_agama' => '', 'nama' => '', 'tanggal_lahir'   => '', 'alamat'   => '', 'no_hp'   => '', 'email'   => '', 'tanggal_masuk'   => '', 'status_mahasiswa'   => '');
        $hitung = count(array_intersect_key($_POST, $arrcheckpost));
        if ($hitung == count($arrcheckpost)) {

            $query = "UPDATE tb_mahasiswa SET
            id_jenis_kelamin = '$_POST[id_jenis_kelamin]',
             id_agama = '$_POST[id_agama]',
             nama = '$_POST[nama]',
             tanggal_lahir = '$_POST[tanggal_lahir]',
             alamat = '$_POST[alamat]',
             no_hp = '$_POST[no_hp]',
             email = '$_POST[email]',
             tanggal_masuk = '$_POST[tanggal_masuk]',
             status_mahasiswa = '$_POST[status_mahasiswa]'
            WHERE nim='$nim'";
            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if ($result) {
                $response = array(
                    'status' => 1,
                    'message' => 'Mahasiswa Updated Successfully.',
                    'coba' => $query
                );
            } else {
                $response = array(
                    'status' => 0,
                    'message' => 'Mahasiswa Updation Failed.'
                );
            }
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Parameter Do Not Match'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    function delete_mahasiswa($nim)
    {
        include "../../koneksi.php";
        $query = "DELETE FROM tb_mahasiswa WHERE nim=" . $nim;
        $result = mysqli_query($conn, $query) or die(mysqli_error($conn));
        if ($result) {
            $response = array(
                'status' => 1,
                'message' => 'Mahasiswa Deleted Successfully.'
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Mahasiswa Deletion Failed.'
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
