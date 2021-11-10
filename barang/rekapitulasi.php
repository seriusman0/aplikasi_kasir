<?php
include 'config.php';
$result = mysqli_query($conn, "SELECT nama_pembeli as nama, sum(jumlah) as jumlah, sum(total) as total FROM `history` GROUP BY nama_pembeli ORDER BY sum(total) DESC");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rekapitulasi</title>
</head>

<body>
    <h1>Rekapitulasi Belanja</h1>
    <table border="1" class="table">
        <tr>
            <th>No</th>
            <th>Nama Pembeli</th>
            <th>Total Item </th>
            <th>Total Harga </th>

        </tr>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($result)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$r[nama]</td>
                    <td>$r[jumlah]</td>
                    <td>" . rupiah($r['total']) . "</td>
                 </tr>";
            $no++;
        }

        ?>
    </table>
</body>

</html>