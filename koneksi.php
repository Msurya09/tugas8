<?php
$host = "localhost";
$user = "root";
$pass = "";
$db = "uas_basis_data";
$conn = mysqli_connect($host, $user, $pass, $db);
if ($conn == false)
{
echo "Koneksi ke server gagal.";
die();
} #else echo "Koneksi berhasil";
?>