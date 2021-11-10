<?php
session_start();
if (!isset($_SESSION['buyer'])) {
    $_SESSION['buyer'] = '';
}
include '../barang/config.php';
include 'functions.php';

$totalKeseluruhan = mysqli_fetch_array(mysqli_query($conn, "SELECT sum(total) FROM `history`"))[0];
function rupiah($angka)
{
    $hasil_rupiah = "Rp " . number_format($angka, 0, ',', '.');
    return $hasil_rupiah;
}
function typeBayar($data, $id)
{
    if ($data == 1) {
        return "Lunas";
    } else return "Ngutang <a tabindex='-1' href='lunas.php?id=$id'>Lunasi<a>";
}

if (isset($_POST['cnameSession'])) {
    $_SESSION['buyer'] = $_POST['nameSession'];
}

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
            <marquee behavior="alternate" class="fixed-bottom" width="100%">Hak cipta oleh Brosis Ketintang </marquee><br>
        </font>
    </h1>

    <div class="container-sm"></div>
    <table align="center" class="table table-success">
        <?php
        if ($_SESSION['buyer'] != '') {
        ?>

            <tr>
                <th width="30%">1. Menu</th>
                <th>2. Cart</th>
            </tr>
            <tr>
                <td><?php include 'add.php' ?></td>
                <td>
                    <?php include 'cart.php' ?>
                </td>
            </tr>
            <tr>
                <th colspan="2">History</th>
            </tr>

            <h1 align="center"> Login Sebagai : <?= $_SESSION['buyer'] ?> atau <a tabindex="5" href="logout.php">Reset Session</a></h1>

        <?php } else { ?>
            <div class="al-center m-4" align="center">
                <h1 align="center">Sebelum bertransaksi, Harap input nama Anda</h1>
                <form action='index.php' method='POST'>
                    <input type='text' name='nameSession' autofocus required>
                    <input type='submit' name='cnameSession' value='Set My Name'>
                </form>
            </div>
        <?php } ?>
        <tr>
            <td colspan="2"><?php include 'history.php' ?></td>
        </tr>

        <tr>
            <td class="bg-success text-center">Total <?php echo "Rp " . number_format($totalKeseluruhan, 0, ',', '.'); ?>
            </td>
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