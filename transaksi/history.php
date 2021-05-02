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
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.css" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
</head>

<body>
    <table class="table table-striped table-dark table-hover">
        <thead class="thead-dark bg-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nama </th>
                <th scope="col">Item </th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Total</th>
                <a href=""></a>
            </tr>
        </thead>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($history)) {
            echo "<tr class='table-dark text-dark'>
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