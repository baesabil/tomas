<?php
/*https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/*/

class Denah
{
    public  function get_denah()
    {
        include "../../koneksi.php";
        $query = "SELECT d.id_denah, k.deskripsi as deskripsi_kategori, d.deskripsi as deskripsi_denah FROM tb_denah d INNER JOIN tb_kategori_bangunan k ON d.id_kategori_bangunan=k.id_kategori_bangunan ORDER BY d.id_denah DESC";
        $data = array();
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result)) {
            $data[] = $row;
           
        }
        $count = mysqli_num_rows($result);
        $response = array(
            'status' => 1,
            'message' => 'Get List Denah Successfully.',
            'result' => $count,
            'data' => $data

        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

}
