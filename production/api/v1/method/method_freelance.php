<?php
/*https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/*/

class Freelance
{
    public  function get_freelance()
    {
        include "../../koneksi.php";
        $query = "SELECT f.id_freelance, k.deskripsi, f.judul_freelance, f.deskripsi, f.file from tb_kategori_freelance k inner join tb_freelance f on k.id_kategori_freelance = f.id_kategori_freelance order by f.id_freelance desc";
        $data = array();
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result)) {
            $path = '../../images/freelance/'.$row->file;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data2 = file_get_contents($path);
            $base64 = base64_encode($data2);
            // $data[] = $row;
            $data[] = (object) [
                'id_freelance' => $row->id_freelance,
                'type' => $type,
                'judul' => $row->judul_event,
                'image' => $base64
            ];
        }
        $count = mysqli_num_rows($result);
        $response = array(
            'status' => 1,
            'message' => 'Get List Freelance Successfully.',
            'result' => $count,
            'data' => $data

        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function get_freelancebyid($id_freelance = 0)
    {
        include "../../koneksi.php";
        if ($id_freelance != 0) {
            $query = "SELECT f.id_freelance, k.deskripsi, f.judul_freelance, f.deskripsi, f.file from tb_kategori_freelance k inner join tb_freelance f on k.id_kategori_freelance = f.id_kategori_freelance";

            $query .= " WHERE f.id_freelance=" . $id_freelance . " LIMIT 1";

            $data = array();
            $result = mysqli_query($conn, $query);
            
            while ($row = mysqli_fetch_object($result)) {
                $path = '../../images/freelance/'.$row->file;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data2 = file_get_contents($path);
                $base64 = base64_encode($data2);
                // $data[] = $row;
                $data[] = (object) [
                    'id_freelance' => $row->id_freelance,
                    'type' => $type,
                    'judul' => $row->judul_freelance,
                    'deskripsi' => $row->deskripsi,
                    'image' => $base64
                ];
            }
            $response = array(
                'status' => 1,
                'message' => 'Get List Freelance by ID Successfully.',
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Failed get data Freelance.',
                'data' => array()
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
