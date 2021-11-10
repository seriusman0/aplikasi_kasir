<?php

function payment($nama, $id_cart, $pType)
{
    global $conn;
    $getCartInfo = mysqli_fetch_array(mysqli_query($conn, "select * from cart where id_cart = '$id_cart'"));
    $nama_barang = $getCartInfo['nama_barang'];
    $harga_barang = $getCartInfo['harga_barang'];
    $jumlah = $getCartInfo['jumlah'];
    $total = $getCartInfo['total'];
    $id_barang = $getCartInfo['id_barang'];

    mysqli_query($conn, "UPDATE `barang` SET `stok` = (barang.stok-'$jumlah') WHERE `barang`.`id_barang` = '$id_barang';");
    mysqli_query($conn, "INSERT INTO `history` (`id_history`, `nama_pembeli`, `nama_barang`, `harga`, `jumlah`, `total`, `at`, `pType`) VALUES (NULL, '$nama', '$nama_barang', '$harga_barang', '$jumlah', '$total', CURRENT_TIMESTAMP, '$pType')");
}
