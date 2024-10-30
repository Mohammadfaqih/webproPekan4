<?php
include "dbconfig.php";

$sqlStatement = "SELECT * FROM students";
$query = mysqli_query($conn, $sqlStatement);

if (mysqli_num_rows($query) > 0) {
  echo "<table border='1' cellspacing='0' cellpadding='10' style='width: 80%; margin: 20px auto; border-collapse: collapse;'>";
  echo "<tr style='background-color: #007bff; color: white;'>
          <th>NIM</th>
          <th>Nama Depan</th>
          <th>Kode Prodi</th>
          <th>Jenis Kelamin</th>
          <th>Aksi</th>
        </tr>";
  
  while ($row = mysqli_fetch_assoc($query)) {
    echo "<tr>
            <td>" . $row['nim'] . "</td>
            <td>" . $row['nama_depan'] . "</td>
            <td>" . $row['kodeprodi'] . "</td>
            <td>" . $row['jenis_kelamin'] . "</td>
            <td>
              <a href='formUpdate.php?nim=" . $row['nim'] . "' style='color: #007bff; text-decoration: none;'>Update</a>
            </td>
          </tr>";
  }
  
  echo "</table>";
} else {
  echo "Data tidak ditemukan.";
}

mysqli_close($conn);
?>
