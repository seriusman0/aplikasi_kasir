<?php
session_start();
include "../barang/config.php";
if (mysqli_num_rows(mysqli_query($conn, "SELECT * from cart")) > 0) {
    echo "<script>alert('Cart Masih Berisi, Tidak bisa Langsung Reset');
        window.location='index.php'</script>";
} else {
    $_SESSION['buyer'] = '';
    mysqli_query($conn, "truncate cart");
    header('Location:index.php');
}
