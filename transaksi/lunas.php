<?php
include '../barang/config.php';
$id = $_GET['id'];
echo "Id yang ada adalah " . $id;
mysqli_query($conn, "UPDATE kasir.history SET pType = true WHERE id_history='$id'");
header("location:index.php");
