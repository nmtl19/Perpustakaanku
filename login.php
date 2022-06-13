<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login | Perpustakaanku</title>
</head>

<body>
  Silakan Login <br><br>
  <form action="?halaman=2" method="POST">
    <label>
      Username :
      <input type="text" name="username" required>
    </label>
    <br><br>
    <label>
      Password :
      <input type="text" name="password" required>
    </label>
    <br><br>
    <input type="submit" name="btnLogin" value="Login">
  </form>

  <?php
  if ($_GET['halaman'] == 2) {
    $user = $_POST['username'];
    $pass = $_POST['password'];

    if ($user == 'admin') {
      if ($pass == 'admin') {
  ?>
        <script language="javascript">
          alert("Berhasil Login");
          document.location = "dashboard.php?halaman=1";
        </script>
      <?php
      }
    } else {
      ?>
      <script language="javascript">
        alert("Gagal Login \nPeriksa Kembali Username dan Password Anda");
        document.location = "index.php";
      </script>
  <?php
    }
  }
  ?>
</body>

</html>