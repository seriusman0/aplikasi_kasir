<?php
include 'config.php';
$id_barang = $_GET['id'];


mysqli_query($conn, "DELETE FROM barang WHERE id_barang = '$id_barang'");
echo "<script>window.alert('Data barang Berhasil Di Hapus.');
        window.location='index.php'</script>";
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <p><i>delete success</i></p>
</body>

</html>

<?php
header('index.php');
?>