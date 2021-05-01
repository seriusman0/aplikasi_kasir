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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>KANTIN KEJUJURAN</title>
</head>

<body>
    <form action="payment.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext border border-warning progress-bar" id="nama" name="nama" placeholder="Nama Anda">
            </div>
        </div>
        <div class="form-group row">
            <label for="paid" class="col-sm-2 col-form-label">Total Bayar : </label>
            <div class="col-sm-10">
                <input type="number" class="form-control-plaintext progress-bar bg-danger" id="paid" name="paid" placeholder="Total Tagihan" value="<?= $jTotal; ?>" readonly>
            </div>
        </div>
        <div align="right">
            <input type="submit" name="bayar" id="bayar" value="Bayar" class="btn btn-warning ">
        </div>
    </form>

    <table>
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


</body>

</html>