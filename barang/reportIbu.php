<?php
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=KantinKejujuranReport.xls"); //ganti nama sesuai keperluan
header("Pragma: no-cache");
header("Expires: 0");

session_start();
error_reporting(0);
function typeBayar($data)
{
    if ($data == true) {
        return "Lunas";
    } else return "Ngutang";
}
include "config.php";
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
?>

<head>
    <title> Export To Excell </title>
    <style>
        .input1 {
            height: 20px;
            font-size: 12px;
            padding-left: 5px;
            margin: 5px 0px 0px 5px;
            width: 97%;
            border: none;
            color: red;
        }

        #kiri {
            width: 50%;
            float: left;
        }

        #kanan {
            width: 50%;
            float: right;
            padding-top: 20px;
            margin-bottom: 9px;
        }

        td {
            border: 1px solid #000;
        }

        th {
            border: 2px solid #000;
        }
    </style>
</head>

<body onload="window.print()">
    <table class="basic" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
            <td align="center" colspan="7"><strong>Kantin Kejujuran Report <?= date('l, d-m-Y'); ?></strong></td>
        </tr>
    </table>
    <br>
    <?php
    echo "<table width=100% border=1>
					<tr bgcolor='green'>
                        <th>No</th>
                        <th>Nama Pembeli</th>
                        <th>Nama Item</th>
                        <th>Harga</th>
                        <th>Jumlah</th>
                        <th>Total</th>
                        <th>Tgl</th>
                    </tr>
                    </thead>
                    <tbody>";
    $kredit = mysqli_query($conn, "SELECT * FROM ibu ORDER BY id_ibu ASC");
    $no = 1;
    while ($i = mysqli_fetch_array($kredit)) {
        echo "<tr class='gradeX'>
                                    <td>$no</td>
                                    <td>$i[nama_pembeli]</td>
                                    <td>$i[nama_barang]</td>
                                    <td>" . rupiah($i['harga']) . "</td>
                                    <td>$i[jumlah]</td>
                                    <td>" . rupiah($i['total']) . "</td>
                                    <td>$i[at]</td>
                                 </tr>";
        $no++;
    }
    ?>
    <tr>
        <td colspan="5" align="center">Total </td>
        <td colspan="2" align="center"><?= rupiah(mysqli_fetch_assoc(mysqli_query($conn, "select sum(total) as total from ibu"))['total']) ?></td>
    </tr>