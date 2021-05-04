<?php
include 'config.php';

$barang = mysqli_query($conn, "select * from barang");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KANTIN KEJUJURAN</title>
</head>

<body>
    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Stok</th>
            <th colspan="2">Action</th>
        </tr>
        <?php $no = 1;
        while ($r = mysqli_fetch_array($barang)) {
            echo "<tr>
                    <td>$no</td>
                    <td>$r[nama_barang]</td>
                    <td>" . rupiah($r['harga']) . "</td>
                    <td>$r[stok]</td>
                    <td><a href='delete.php?id=$r[id_barang]' onclick=\"return confirm('Yakin ini Dihapus?')\" >Delete</a></td>
                    <td><a href='edit.php?id=$r[id_barang]'>Edit</a></td>
                 </tr>";
            $no++;
        }

        ?>
    </table>
    <a href="tambahbarang.php">Tambah</a>

</body>

</html>