<?php
/*https://belajaraplikasi.com/membuat-rest-api-dengan-php-dan-mysql/*/

class Event
{
    public  function get_event()
    {
        include "../../koneksi.php";
        $query = "SELECT e.id_event, k.nama_kategori_event, e.judul_event, e.deskripsi, e.file from tb_kategori_event k inner join tb_event e on k.id_kategori_event = e.id_kategori_event order by e.id_event desc";
        $data = array();
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_object($result)) {
            $path = '../../images/event/'.$row->file;
            $type = pathinfo($path, PATHINFO_EXTENSION);
            $data2 = file_get_contents($path);
            $base64 = base64_encode($data2);
            // $data[] = $row;
            $data[] = (object) [
                'id_event' => $row->id_event,
                'type' => $type,
                'judul' => $row->judul_event,
                'image' => $base64
            ];
        }
        $count = mysqli_num_rows($result);
        $response = array(
            'status' => 1,
            'message' => 'Get List Event Successfully.',
            'result' => $count,
            'data' => $data

        );
        header('Content-Type: application/json');
        echo json_encode($response);
    }

    public function get_eventbyid($id_event = 0)
    {
        include "../../koneksi.php";
        if ($id_event != 0) {
            $query = "SELECT e.id_event, k.nama_kategori_event, e.judul_event, e.deskripsi, e.file from tb_kategori_event k inner join tb_event e on k.id_kategori_event = e.id_kategori_event";

            $query .= " WHERE e.id_event=" . $id_event . " LIMIT 1";

            $data = array();
            $result = mysqli_query($conn, $query);
            while ($row = mysqli_fetch_object($result)) {
                $path = '../../images/event/'.$row->file;
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data2 = file_get_contents($path);
                $base64 = base64_encode($data2);
                // $data[] = $row;
                $data[] = (object) [
                    'id_event' => $row->id_event,
                    'type' => $type,
                    'judul' => $row->judul_event,
                    'deskripsi' => $row->deskripsi,
                    'image' => $base64
                ];
            }
            $response = array(
                'status' => 1,
                'message' => 'Get List Event by ID Successfully.',
                'data' => $data
            );
        } else {
            $response = array(
                'status' => 0,
                'message' => 'Failed get data Event.',
                'data' => array()
            );
        }
        header('Content-Type: application/json');
        echo json_encode($response);
    }
}
