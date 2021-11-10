<?php
include '../barang/config.php';

function makeApi($id_barang)
{
    global $conn;

    $getData = mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id_barang'");
    while ($data = mysqli_fetch_assoc($getData)) {
        $item = array(
            "id_barang" => $data['id_barang'],
            "nama_barang" => $data['nama_barang'],
            "harga" => $data['harga']
        );
        return json_encode($item);
    }
}
$dapat = $_POST['id_barang'];
$get = json_decode(makeApi($dapat), true);
echo $get['nama_barang'];
