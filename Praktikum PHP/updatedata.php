<?php
include "dbconfig.php";

$nim = $_POST['nim'];
$nama_depan = $_POST['nama_depan'];
$kode_prodi = $_POST['kode_prodi'];
$jk = $_POST['jenis_kelamin'];

$sql = "UPDATE students SET
        nama_depan='$nama_depan',
        kodeprodi='$kode_prodi',
        jenis_kelamin='$jk'
        WHERE nim='$nim'";

$query = mysqli_query($conn, $sql);

if ($query) {
  echo "Data berhasil di-update.";
} else {
  echo "Error: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
