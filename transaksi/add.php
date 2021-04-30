<?php
include '../barang/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <title>HOME KANTIN</title>
    <script src="../js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <form action="addToCart.php" id="form" method="POST">
        <div class="form-group">
            <p>
                <label for="id_barang">ID Barang : </label>
                <input type="text" name="id_barang" required id="id_barang" autofocus placeholder="Scan Barcode">
            </p>

            <p>
                <label for="jumlah">Jumlah : </label>
                <input type="number" name="jumlah" required placeholder="Jumlah Item yang akan di beli">
            </p>
            <div>
                <input type="submit" name="oke" id="oke" value="Letakkan Di keranjang" class="btn-success">
            </div>
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