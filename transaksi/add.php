<?php
include '../barang/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../bootstrap-4.0.0-dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="../bootstrap-4.0.0-dist/js/bootstrap.min.js" crossorigin="anonymous"></script>
    <title>HOME KANTIN</title>
    <script src="../js/jquery-3.6.0.min.js"></script>

</head>

<body>
    <form action="addToCart.php" id="form" method="POST">
        <div class="form-group row">
            <label for="id_barang" class="col-sm-2 col-form-label">ID Barang : </label>
            <div class="col-sm-10">
                <input type="text" autocomplete=false oninvalid="this.setCustomValidity('Scan Barcode dulu ya. . . . . .')" oninput="setCustomValidity('')" width="10%" class="form-control-plaintext border border-warning progress-bar text-dark" id="id_barang" name="id_barang" placeholder="Scan Barcode" autofocus required>
            </div>
        </div>
        <div class="form-group" align="right">
            <input type="submit" name="oke" id="oke" hidden tabindex="-1" value="ADD TO CART ( ENTER )" class="fas fa-shopping-cart btn btn-warning btn-lg btn-block">
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