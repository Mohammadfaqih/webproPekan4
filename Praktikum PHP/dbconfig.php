<?php
$host = "localhost:8111";
$user = "root";
$pass = "";

$dbname = "academic";

$conn = mysqli_connect($host, $user, $pass, $dbname);

if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

?>