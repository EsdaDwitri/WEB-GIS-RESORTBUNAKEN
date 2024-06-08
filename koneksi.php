<?php 
$con = mysqli_connect("localhost", "root", "", "klp3_bunakengeomaps");

if (mysqli_connect_error()) {
    echo "Failed" . mysqli_connect_error();
    exit();
}
?>