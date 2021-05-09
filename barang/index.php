<?php
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
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>
    <h1 class="success">
        <b>
            <center>
                KANTIN KEJUJURAN
            </center>
        </b>
    </h1>
    <a class="btn btn-success" href="report.php">Download History</a> <a class="btn btn-danger" href="clear.php" onclick="return confirm('Yakin Ingin Membersihkan History?')">Clear History</a>
    <table align="center" class="table" border="1">
        <tr>
            <th colspan="4" width="40%"></th>
            <th colspan="8" width="80%"></th>
        </tr>
        <tr>
            <td colspan="4"><?php include 'tambahbarang.php' ?></td>

            <td colspan="8" align="center"><?php include 'view.php' ?></td>
        </tr>
    </table>

</body>

</html>