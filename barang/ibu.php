<?php
include "config.php";

$history = mysqli_query($conn, "SELECT * FROM ibu ORDER BY at DESC");

function rupiah($angka)
{
    $hasil_rupiah = number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
if (isset($_POST['oke'])) {
    global $conn;
    if (mysqli_num_rows(mysqli_query($conn, "select id_barang from barang where id_barang = '$_POST[id_barang]'")) > 0) {
        $pembeli = $_POST['buyer'];
        $id_barang = $_POST['id_barang'];
        $about_barang = mysqli_fetch_assoc(mysqli_query($conn, "Select * from barang where id_barang = '$id_barang'"));
        $nama_barang = $about_barang['nama_barang'];
        $harga = $about_barang['harga'];
        $total = $about_barang['harga'];

        mysqli_query($conn, "INSERT INTO ibu(`id_ibu`, `nama_pembeli`, `nama_barang`, `harga`, `jumlah`, `total`, `at`) 
        VALUES(NULL, '$pembeli', '$nama_barang', '$harga', '1', '$total', CURRENT_TIMESTAMP)");
        header('location: ibu.php');
    } else {
        echo "<script>alert('ID BARANG TIDAK DI TEMUKAN');
        window.location='ibu.php'</script>";
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Document</title>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link href="../fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
</head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <div class="container m-8">

        <form action="" id="form" method="POST">
            <div class="form-group">
                <label for="id_barang" class="col-form-label">ID Barang : </label>
                <div class="">
                    <input type="text" autocomplete=false oninvalid="this.setCustomValidity('Scan Barcode dulu ya. . . . . .')" oninput="setCustomValidity('')" width="10%" class="form-control-plaintext border border-warning bg-info progress-bar text-light" id="id_barang" name="id_barang" placeholder="Scan Barcode" autofocus required>
                </div>
            </div>
            <div class="form-group">
                <label for="id_barang" class="col-form-label">Pembeli : </label>
                <div class="">
                    <input type="text" autocomplete=false oninvalid="this.setCustomValidity('Nama nya, jangan lupa. . . . . .')" oninput="setCustomValidity('')" width="10%" class="form-control-plaintext border border-warning progress-bar text-light" id="buyer" name="buyer" placeholder="Nama Anda" required>
                </div>
            </div>
    </div>

    <div class="form-group" align="right">
        <input type="submit" name="oke" id="oke" hidden tabindex="-1" value="ADD TO CART ( ENTER )" class="fas fa-shopping-cart btn btn-warning btn-lg btn-block">
    </div>
    </form>

    <table class="table table-striped table-dark table-hover">
        <thead class="thead-dark bg-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama </th>
                <th scope="col">Item </th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                <th scope="col">Time Stamp</th>
            </tr>
        </thead>
        <?php
        $no = 1;

        while ($r = mysqli_fetch_array($history)) {
            echo "<tr class='table-dark text-dark'>
                    <td>$no</td>
                    <td>$r[nama_pembeli]</td>
                    <td>$r[nama_barang]</td>
                    <td>" . rupiah($r['harga']) . "</td>
                    <td align='center'>$r[jumlah]</td>
                    <td>" . rupiah($r['total']) . "</td>
                    <td>$r[at]</td>
                </tr>";
            $no++;
        }

        ?>
        <tr>
            <td colspan="6" align="center">Total </td>
            <td align="center"><?= rupiah(mysqli_fetch_assoc(mysqli_query($conn, "select sum(total) as total from ibu"))['total']) ?></td>
        </tr>
    </table>
    </div>
</body>

</html>