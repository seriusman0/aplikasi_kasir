<?php
include '../barang/config.php';

if (isset($_POST['oke'])) {
    global $conn;
    if (mysqli_num_rows(mysqli_query($conn, "select id_barang from barang where id_barang = '$_POST[id_barang]'")) > 0) {
        $id_barang = $_POST['id_barang'];
        // $jumlah = $_POST['jumlah'];
        if (mysqli_num_rows(mysqli_query($conn, "select id_barang from cart where id_barang = '$id_barang'")) > 0) {
            // echo "<script>alert('Barang sudah ada')</script>";

            $getDetailProduct = mysqli_fetch_array(mysqli_query($conn, "select * from cart where id_barang = '$id_barang'"));
            $getHarga = $getDetailProduct['harga_barang'];
            $jumlahSebelumnya = $getDetailProduct['jumlah'] + 1;
            $getTotal = $getHarga * $jumlahSebelumnya;
            $updateCart = "UPDATE cart SET cart.total= '$getTotal', cart.jumlah = '$jumlahSebelumnya' where id_barang = '$id_barang'";
            mysqli_query($conn, $updateCart);

            // echo "<a href='index.php'>index</a>";
            header('location: index.php');
        } else {
            echo "<script>alert('Barang tidak ada')</script>";
            $desc_item  = mysqli_fetch_array(mysqli_query($conn, "SELECT * FROM barang WHERE id_barang = '$id_barang'"));
            $getHarga = $desc_item['harga'];
            $getNama = $desc_item['nama_barang'];
            $total = $getHarga;
            mysqli_query($conn, "INSERT INTO cart(`id_cart`, `id_barang`, `nama_barang`, `harga_barang`, `jumlah`, `total`, `update_at`) VALUES(NULL, '$id_barang', '$getNama', '$getHarga', '1', '$total', CURRENT_TIMESTAMP)");
            header('location: index.php');
        }
    } else {
        echo "<script>alert('ID BARANG TIDAK DI TEMUKAN');
        window.location='index.php'</script>";
        // header('location: index.php');
    }
}
