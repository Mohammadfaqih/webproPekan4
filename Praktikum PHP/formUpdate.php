<?php
include "dbconfig.php";

$nim = $_GET['nim'];
$sql = "SELECT * FROM students WHERE nim='$nim'";
$query = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($query);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Update Data</title>
  <style>
    /* Styling form agar lebih estetis */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      margin: 0;
      font-family: Arial, sans-serif;
      background-color: #f0f4f8;
    }

    form {
      background-color: #ffffff;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    label {
      display: block;
      font-weight: bold;
      margin-top: 10px;
      color: #333;
    }

    input[type="text"],
    select {
      width: 100%;
      padding: 8px;
      margin-top: 5px;
      border: 1px solid #ddd;
      border-radius: 10px;
      font-size: 14px;
    }

    input[type="submit"] {
      width: 100%;
      padding: 10px;
      margin-top: 15px;
      border: none;
      border-radius: 10px;
      background-color: #007bff;
      color: #fff;
      font-size: 16px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    input[type="submit"]:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
  <form action="updatedata.php" method="POST" onsubmit="return redirectToViewData()">
    <h1>Update Data</h1>
    <input type="hidden" name="nim" value="<?php echo $row['nim']; ?>">
    
    <label for="nama_depan">Nama</label>
    <input type="text" name="nama_depan" id="nama_depan" value="<?php echo $row['nama_depan']; ?>" required>

    <label for="kode_prodi">Kode Prodi</label>
    <input type="text" name="kode_prodi" id="kode_prodi" value="<?php echo $row['kodeprodi']; ?>" required>

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" required>
      <option value="L" <?php if ($row['jenis_kelamin'] == 'L') echo 'selected'; ?>>Laki-laki</option>
      <option value="P" <?php if ($row['jenis_kelamin'] == 'P') echo 'selected'; ?>>Perempuan</option>
    </select>

    <input type="submit" value="Update">
  </form>

  <script>
    function redirectToViewData() {
      // Redirect ke halaman viewdata.php setelah submit
      setTimeout(() => {
        window.location.href = "viewdata.php";
      }, 1000); // Waktu tunggu 1 detik agar pengguna dapat melihat konfirmasi
      return true;
    }
  </script>
</body>
</html>
