<?php
include 'config.php';
if (isset($_POST['tambah'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    if (mysqli_num_rows(mysqli_query($conn, "select id_barang from barang where id_barang = '$id_barang'")) > 0) {
        echo "<script>alert('data Sudah ada, Tambakan Jumlah saja')</script>";
        $getDetailProduct = mysqli_fetch_array(mysqli_query($conn, "select * from barang where id_barang = '$id_barang'"));
        $getStok = $getDetailProduct['stok'] + $stok;
        $updateCart = "UPDATE barang SET barang.stok = '$getStok' where id_barang = '$id_barang'";
        mysqli_query($conn, $updateCart);
    } else {
        mysqli_query($conn, "INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `stok`) values('$id_barang','$nama_barang','$harga','$stok')");
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah</title>
</head>

<body>

    <h1><b>
            <center>
                TAMBAH BARANG
            </center>
        </b>
    </h1>
    <div>
        <form action="" method="post">

            <div class="form-group-row">
                <label for="id_barang">ID BARANG : </label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control-plaintext border border-warning progress-bar text-dark" name="id_barang" autofocus>
                </div>
            </div>
            <div>
                <label for="nama_barang">Nama Barang : </label>
                <div class="col-sm-10">
                    <input required type="text" class="form-control-plaintext border border-warning progress-bar text-dark" name="nama_barang">
                </div>
            </div>
            <div>
                <label for="harga">Harga : </label>
                <div class="col-sm-10">
                    <input required type="number" class="form-control-plaintext border border-warning progress-bar text-dark" name="harga">
                </div>
            </div>
            <div>
                <label for="stok">Stok : </label>
                <div class="col-sm-10">
                    <input required type="number" class="form-control-plaintext border border-warning progress-bar text-dark" name="stok">
                </div>
            </div>
            <br>
            <input type="submit" class="fas fa-shopping-cart btn btn-warning btn-lg btn-block" name="tambah" value="Tambah">
        </form>
    </div>
</body>

</html>