<?php
include '../barang/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>HOME KANTIN</title>
    <script src="../js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <form action="addToCart.php" id="form" method="POST">
        <div class="form-group row">
            <label for="id_barang" class="col-sm-2 col-form-label">ID Barang : </label>
            <div class="col-sm-10">
                <input type="text" width="10%" class="form-control-plaintext border border-warning progress-bar" id="id_barang" name="id_barang" placeholder="Scan Barcode">
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-sm-2 col-form-label">Jumlah : </label>
            <div class="col-sm-10">
                <input type="text" class="form-control-plaintext border border-warning progress-bar" id="jumlah" name="jumlah" placeholder="Jumlah Item">
            </div>
        </div>
        <div class="form-group" align="right">
            <input type="submit" name="oke" id="oke" value="Letakkan Di keranjang" class="fas fa-shopping-cart btn btn-warning btn-lg btn-block">
        </div>
    </form>

    <!-- <script type="text/javascript">
        $(document).ready(function() {
            $('#oke').click(function() {
                var data = $('#form').serialize();
                alert("masuk pak eko")
                $.ajax({
                    type: 'POST',
                    url: "addToCart.php",
                    data: data,
                    cache: false,
                    success: function(data) {
                        alert("succes kirim lewat post");
                    }
                });

            });
        });
    </script> -->

</body>

</html>