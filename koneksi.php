<?php

$server = "localhost";
$username = "root";
$password = "";
$database = "paweb";

$konek = mysqli_connect($server,$username,$password) or die ("Gagal");
mysqli_select_db($konek,$database) or die ("Database tidak ditemukan");

?>