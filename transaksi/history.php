<?php
include '../barang/config.php';
$history = mysqli_query($conn, "select * from history order by id_history desc");
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KANTIN KEJUJURAN</title>
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>

<body>
    <table align="center" class="table-dark" width='100%'>
        <tr>
            <th scope="col">No</th>
            <th scope="col">Nama Pembeli</th>
            <th scope="col">Nama Barang</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Total</th>
            <a href=""></a>
        </tr>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($history)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$r[nama_pembeli]</td>
                    <td>$r[nama_barang]</td>
                    <td>" . rupiah($r['harga']) . "</td>
                    <td>$r[jumlah]</td>
                    <td>" . rupiah($r['total']) . "</td>
                 </tr>";
            $no++;
        }

        ?>
    </table>

</body>

</html>