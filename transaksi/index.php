<?php
include '../barang/config.php';
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>

<body>
    <h1>
        <center>
            <b>
                SELAMAT DATANG DI KANTIN KEJUJURAN
            </b>
        </center>
    </h1>
    <table align="center" border="1">
        <tr>
            <th colspan="4" width="40%">menu</th>
            <th colspan="8" width="80%">view</th>
        </tr>
        <tr>
            <td colspan="4"><?php include 'add.php' ?></td>

            <td colspan="8" align="center"><?php include 'history.php' ?></td>
        </tr>
    </table>

</body>

</html>