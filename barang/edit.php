<?php
include 'config.php';
$id_barang = $_GET['id'];
$result = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM barang where id_barang = '$id_barang'"));
if (isset($_POST['update'])) {
    $id_barang = $_POST['id_barang'];
    $nama_barang = $_POST['nama_barang'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    mysqli_query($conn, "UPDATE barang set nama_barang = '$nama_barang',
    harga = '$harga',
    stok = '$stok'
     WHERE id_barang = '$id_barang'");
    echo "<script>window.alert('Update Data Berhasil.');
     window.location='index.php'</script>";
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
                <input type="text" name="id_barang" value="<?= $result['id_barang'] ?>" autofocus>
            </p>
            <p>
                <label for="nama_barang">Nama Barang : </label>
                <input type="text" name="nama_barang" value="<?= $result['nama_barang'] ?>">
            </p>
            <p>
                <label for="harga">Harga : </label>
                <input type="number" name="harga" value="<?= $result['harga'] ?>">
            </p>
            <p>
                <label for="stok">Stok : </label>
                <input type="number" name="stok" value="<?= $result['stok'] ?>">
            </p>
            <input type="submit" name="update" value="UPDATE">
        </form>
    </div>
</body>
<?php include 'index.php' ?>

</html>