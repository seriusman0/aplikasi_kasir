<?php
include '../barang/config.php';

if (isset($_POST['oke'])) {
    global $conn;
    if (mysqli_num_rows(mysqli_query($conn, "select id_barang from barang where id_barang = '$_POST[id_barang]'")) > 0) {
        $id_barang = $_POST['id_barang'];
        $jumlah = $_POST['jumlah'];

        $desc_item  = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id_barang'"));
        $getHarga = $desc_item['harga'];
        $getNama = $desc_item['nama_barang'];
        $total = $jumlah * $getHarga;
        mysqli_query($conn, "INSERT INTO cart VALUES(NULL, '$id_barang', '$getNama', '$getHarga', '$jumlah', '$total')");
        header('location: index.php');
    } else {
        echo "<script>alert('ID BARANG TIDAK DI TEMUKAN')</script>";
    }
}
