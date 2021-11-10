<?php
include 'config.php';
mysqli_query($conn, "TRUNCATE history");
header("location: index.php");
