<?php
include '../barang/config.php';
include 'functions.php';

if (isset($_POST['bayar'])) {
    var_dump($_POST);
    $nama = $_POST['nama'];
    $pType = $_POST['paidType'];
    echo "Tipe bayar adalah - " . $pType;

    $jlhData = mysqli_num_rows(mysqli_query($conn, "select id_cart from cart"));
    $queryCart = mysqli_query($conn, "SELECT * FROM cart");
    while ($r = mysqli_fetch_array($queryCart)) {
        payment($nama, $r['id_cart'], $pType);
    }

    mysqli_query($conn, "TRUNCATE cart");
    header('location: index.php');
}
