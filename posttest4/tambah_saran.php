<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Saran</title>
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
<body>
  <div class="container">
  <form action="lihat_saran.php" method="POST">
        <h3>KIRIM SARAN</h3>
        <table>
        <div class="inputBox">
          <label for="">Nama</label>
          <input type="text" name="nama" placeholder="Nama" required>
        </div>
        <div class="inputBox">
          <label for="">Email</label>
          <input type="email" name="email" placeholder="Contoh@gmail.com" required>
        </div>
        <div class="inputBox">
          <label for="">No Telepon</label>
          <input type="tel" name="telepon" placeholder="+62 81312345678" required>
        </div>
        <div class="inputBox">
          <label for="">Tanggal</label>
          <input type="date" name="tanggal" required>
        </div>
        <div class="inputBox">
          <label for="">Saran</label>
          <input type="text" name="saran" required>
        </div>
        <input type="submit" value="Submit">
      </form>
      </table>
  </div>
</body>
</html>