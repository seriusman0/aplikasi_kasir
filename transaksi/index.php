<?php
include '../barang/config.php';
include 'functions.php';

$totalKeseluruhan = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(total) FROM `history`"))[0];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>Home</title>
</head>

<body>

    <h1>
        <center>
            <b>
                SELAMAT DATANG DI KANTIN KEJUJURAN
            </b>
            <font size="1">
                <marquee behavior="alternate" class="fixed-bottom" width="100%">Aplikasi masih dalam tahap pengembangan . . . .</marquee><br>
            </font>
        </center>
    </h1>
    <table align="center" class="table">
        <tr>
            <th width='40%' class="position-relative">1. Menu</th>
            <th>History</th>
            <th class="btn-success">Total <?php echo "Rp " . number_format($totalKeseluruhan, 0, ',', '.'); ?></th>
        </tr>
        <tr>
            <td><?php include 'add.php' ?></td>
            <td rowspan="19" colspan="2">
                <?php include 'history.php' ?>
            </td>
        </tr>
        <tr>
            <th>2. Cart</th>
        </tr>
        <tr>
            <td><?php include 'cart.php' ?></td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
        <tr>
            <td>--</td>
        </tr>
    </table>

</body>

</html>