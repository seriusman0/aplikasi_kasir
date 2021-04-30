<?php
include '../barang/config.php';
include 'functions.php';

if (isset($_POST['bayar'])) {
    $nama = $_POST['nama'];

    $jlhData = mysqli_num_rows(mysqli_query($conn, "select id_cart from cart"));
    $queryCart = mysqli_query($conn, "SELECT * FROM cart");
    while ($r = mysqli_fetch_array($queryCart)) {
        payment($nama, $r['id_cart']);
        echo $count;
    }

    mysqli_query($conn, "TRUNCATE cart");
    header('location: index.php');
}
