<?php
include "../barang/config.php";
$history = mysqli_query(
    $conn,
    "select * from history order by id_history desc"
);
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
                <th scope="col">Time Stamp</th>
                <th scope="col">Tipe Bayar</th>
            </tr>
        </thead>
        <?php
        $no = 1;

        while ($r = mysqli_fetch_array($history)) {
            echo "<tr class='table-dark text-dark'>
                    <td>$no</td>
                    <td>$r[nama_pembeli]</td>
                    <td>$r[nama_barang]</td>
                    <td>" .
                rupiah($r["harga"]) .
                "</td>
                    <td align='center'>$r[jumlah]</td>
                    <td>" .
                rupiah($r["total"]) .
                "</td>
                    <td>$r[at]</td>
                    <td tabindex='-1'>" .
                typeBayar($r, $r["id_history"]) .
                "</td>
                 </tr>";
            $no++;
        }
        ?>
    </table>

</body>

</html>
