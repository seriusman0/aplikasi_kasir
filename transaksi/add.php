<?php
include '../barang/config.php';
if (isset($_POST['oke'])) {
    $nama = $_POST['nama'];
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];
    $total = getTotal($id_barang, $jumlah);
    mysqli_query($conn, "INSERT INTO history VALUES (NULL,'$nama','$id_barang','$jumlah','$total')");

    echo "<script>window.location='index.php'</script>";
}

function getTotal($id_barang, $jumlah)
{
    global $conn;
    mysqli_query($conn, "SELECT harga FROM barang WHERE id_barang = '$id_barang'");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME KANTIN</title>
</head>

<body>
    <form action="" method="POST">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" autofocus>
        </p>
        <p>
            <label for="id_barang">ID Barang : </label>
            <input type="text" name="id_barang">
        </p>
        <p>
            <label for="jumlah">Jumlah : </label>
            <input type="number" name="jumlah">
        </p>
        <p>
            <label for="total">Total : </label>
            <input type="number" name="total" readonly>
        </p>
        <input type="submit" name="oke" value="OKE">
    </form>
</body>

</html>