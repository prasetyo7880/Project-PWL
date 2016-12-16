<?php
$host = "localhost";
$username = "root";
$password = "";

$koneksi = mysql_connect($host,$username,$password) or die ("Gagal".mysql_error());

mysql_select_db("komplain") or die ("Database tidak ditemukan");



?>