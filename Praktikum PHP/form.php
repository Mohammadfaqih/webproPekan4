<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Input Data</title>
  <style>
    /* Buat form berada di tengah halaman */
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      background-color: #f0f4f8;
      font-family: Arial, sans-serif;
      margin: 0;
    }

    h1 {
      text-align: center;
      color: #333;
    }

    form {
      background-color: #fff;
      padding: 20px 30px;
      border-radius: 8px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      width: 300px;
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
      box-sizing: border-box;
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
  <form action="insertdata.php" method="POST">
    <h1>Login</h1>
    <label for="nim">Nim</label>
    <input type="text" name="nim" id="nim" required>

    <label for="nama_depan">Nama</label>
    <input type="text" name="nama_depan" id="nama_depan" required>

    <label for="kode_prodi">Kode Prodi</label>
    <input type="text" name="kode_prodi" id="kode_prodi" required>

    <label for="jenis_kelamin">Jenis Kelamin</label>
    <select name="jenis_kelamin" id="jenis_kelamin" required>
      <option value="L">Laki-laki</option>
      <option value="P">Perempuan</option>
    </select>

    <input type="submit" name="submit" value="Submit" >
  </form>
</body>
</html>
