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
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <link href="../fontawesome-free-5.15.3-web/css/fontawesome.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/brands.css" rel="stylesheet">
    <link href="../fontawesome-free-5.15.3-web/css/solid.css" rel="stylesheet">
    <title>Home</title>
</head>

<body>

    <h1 class="alert alert-primary text-center">
        SELAMAT DATANG DI KANTIN KEJUJURAN
        <font size="1">
            <marquee behavior="alternate" class="fixed-bottom" width="100%">Aplikasi masih dalam tahap pengembangan . . . .</marquee><br>
        </font>
    </h1>
    <div class="container-sm"></div>
    <table align="center" class="table table-success">
        <tr>
            <th width='40%' class="position-relative">1. Menu</th>
            <th>History</th>
            <th width="10%" class="bg-success text-center">Total <?php echo "Rp " . number_format($totalKeseluruhan, 0, ',', '.'); ?></th>
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

    <script>
        $.Shortcuts.add({
            type: 'down',
            mask: 'P',
            handler: function() {
                window.print();
            }
        }).start();
    </script>

    <script>
        $.Shortcuts.add({
            type: 'down',
            mask: 'CTRL+G',
            handler: function() {
                window.open('http://www.google.com', '_self');
            }
        }).start();
    </script>

    <script>
        $.Shortcuts.add({
            type: 'down',
            mask: 'ALT+R',
            handler: function() {
                window.open('https://blog.rosihanari.net', '_blank');
            }
        }).start();
    </script>

    <script>
        $.Shortcuts.add({
            type: 'down',
            mask: 'F8',
            handler: function() {
                document.getElementById('title').innerHTML = "Hallo";
            }
        }).start();
    </script>

    <script>
        $.Shortcuts.add({
            type: 'down',
            mask: 'F9',
            handler: function() {
                document.getElementById('title').innerHTML = "Contoh Shortcut Action";
            }
        }).start();
    </script>

</body>

</html>