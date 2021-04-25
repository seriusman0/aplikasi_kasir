<?php
include 'config.php';
if (isset($_POST['tambah'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];

    mysqli_query($conn, "INSERT INTO barang values('$id_barang','$nama_barang','$harga','$stok')");
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
            <p>
                <label for="id_barang">ID BARANG : </label>
                <input type="text" name="id_barang" autofocus>
            </p>
            <p>
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang">
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga">
            </p>
            <p>
                <label for="stok">Stok : </label>
                <input type="number" name="stok">
            </p>
            <input type="submit" name="tambah" value="Tambah">
        </form>
    </div>
</body>
<?php include 'index.php' ?>

</html>