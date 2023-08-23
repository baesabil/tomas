<?php
/*https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/*/

class Gambardenah
{
    public  function get_gambardenah()
    {
        include "../../koneksi.php";
        $query = "SELECT * from tb_gambar_denah";
        $data = array();
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result)) {
            $path = '../../images/denah/'.$row->file;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data2 = file_get_contents($path);
            $base64 = base64_encode($data2);
            // $data[] = $row;
            $data[] = (object) [
                'id_gambar_denah' => $row->id_gambar_denah,
                'deskripsi' => $row->deskripsi,
                'image' => $base64
            ];
        }
        $count = mysqli_num_rows($result);
        $response = array(
            'status' => 1,
            'message' => 'Get Gambar Denah Successfully.',
            'result' => $count,
            'data' => $data

        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

}
