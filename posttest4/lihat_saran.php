<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lihat Saran</title>
  <style>
    body {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
      background: #8d6624;
    }

    .container {
      width: 60%;
      height: 60vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      background: #ffad32;
      border-radius: 10px;
    }

    .container h1 {
      color: #8d6624;
      text-align: center;
    }

    table {
      margin-bottom: auto;
      border-collapse: collapse;
      background: rgb(241, 148, 26);
      color: #000000;
    }

    th, td {
      text-align: left;
      border: 2px solid #000000;
      padding: 20px 30px;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1>SARAN</h1>
    <table>
      <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No. Telephone</th>
        <th>Tanggal</th>
        <th>Saran</th>
      </tr>
      <?php
        $nama = $_POST["nama"];
        $email = $_POST["email"];
        $telepon = $_POST["telepon"];
        $tanggal = $_POST["tanggal"];
        $saran = $_POST["saran"];
        echo "<tr>";
        echo "<td>$nama</td>";
        echo "<td>$email</td>";
        echo "<td>$telepon</td>";
        echo "<td>$tanggal</td>";
        echo "<td>$saran</td>";
        echo "<tr>";
      ?>
    </table>
  </div>
</body>
</html>