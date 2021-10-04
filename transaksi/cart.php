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
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>KANTIN KEJUJURAN</title>
</head>

<body>


    <form action="payment.php" method="post">
        <div class="form-group row">
            <label for="nama" class="col-sm-2 col-form-label">Nama : </label>
            <div class="col-sm-10">
                <input type="text" oninvalid="this.setCustomValidity('Nama Pembeli Wajib diisi . . . .')" oninput="setCustomValidity('')" class="form-control-plaintext border border-warning progress-bar" id="nama" name="nama" value="<?= $_SESSION['buyer']; ?>" placeholder="Nama Anda" required readonly>
            </div>
        </div>
        <div class="form-group row">
            <label for="paid" class="col-sm-2 col-form-label">Total Bayar : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext progress-bar bg-danger" id="paid" name="paid" placeholder="Total Tagihan" value="<?= rupiah($jTotal); ?>" readonly>
            </div>
        </div>

        <div class="form-group row">
            <label for="paid" class="col-sm-2 col-form-label">Tipe Pembayaran</label>
            <div class="col-sm-10">
                <select name="paidType" id="paidType" required class="form-control-plaintext progress-bar bg-pink">
                    <option value="">Type Pembayaran</option>
                    <option value="0">Nguntang</option>
                    <option value="1">Cash</option>
                </select>
            </div>
        </div>

        <div align="right">
            <input type="submit" name="bayar" id="bayar" value="CASH OUT ( ENTER )" class="btn btn-warning ">
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
            <th>Time</th>
            <th>Action</th>
        </tr>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($barang)) {
            echo "<tr  tabindex='8'>
                    <td>$no</td>
                    <td>$r[id_barang]</td>
                    <td>$r[nama_barang]</td>
                    <td>$r[harga_barang]</td>
                    <td>$r[jumlah]</td>
                    <td>$r[jumlah]</td>
                    <td>" . rupiah($r['total']) . "</td>
                    <td>$r[update_at]</td></tr>
                    <td><a href='cancel.php?id=$r[id_cart]' onclick=\"return confirm('Yakin ini Dihapus?')\" >Cancel</a></td>
                    ";
            $no++;
        }
        ?>
    </table>

</body>

</html>