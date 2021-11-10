<?php
include 'config.php';
mysqli_query($conn, "TRUNCATE ibu");
header("location: index.php");
