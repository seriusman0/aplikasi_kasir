<?php
include '../barang/config.php';

$barang = mysqli_query($conn, "select * from cart");
$jTotal = mysqli_fetch_array(mysqli_query($conn, "select sum(cart.total) from cart"))[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>KANTIN KEJUJURAN</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>ID</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Action</th>
        </tr>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($barang)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$r[id_barang]</td>
                    <td>$r[nama_barang]</td>
                    <td>$r[harga_barang]</td>
                    <td>$r[jumlah]</td>
                    <td>$r[total]</td>
                    <td><a href='cancel.php?id=$r[id_cart]' onclick=\"return confirm('Yakin ini Dihapus?')\" >Cancel</a></td>
                 </tr>";
            $no++;
        }

        ?>
    </table>

    <form action="payment.php" method="post">
        <div class="form-group">
            <p>
                <label for="nama">Nama : </label>
                <input type="text" name="nama" required>
            </p>
            <b>
                <p>
                    <label for="paid">Total Bayar : </label>
                    <input type="number" name="paid" value="<?= $jTotal; ?>" readonly>
                </p>
            </b>
            <p>

                <input type="submit" name="bayar" id="bayar" value="Bayar">
            </p>
        </div>
    </form>


</body>

</html>