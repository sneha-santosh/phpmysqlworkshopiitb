<?php

$conn = mysqli_connect("localhost","root","") or die(mysqli_connect_error());
mysqli_select_db($conn,"result") or die(mysqli_error());
echo "Connected successfully";
?>