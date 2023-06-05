<?php

require_once '../../models/Books.php';

$books = new Books();
$state = null;
if (isset($_POST['delete'])) {
  $state = $books->destroy($_POST['id']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="../../assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="../../assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="../../assets/favicons/site.webmanifest">
  <link rel="stylesheet" href="../../style/extern/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="../../style/main.css">
  <script src="../../script/extern/jquery-3.6.4.js"></script>
  <title>Librarium Catalogia</title>
</head>
<body>
  <section class="title bg-snow-3 fg-night-4" style="padding: 15px 0;">
    <i class="fa fa-book-bookmark" style="display: block; margin: 0.83em; font-size: 30pt;"></i>
    <h1 style="margin-bottom: 0px; font-family: consolas;">L I B R A R I U M</h1>
    <h4 style="margin-top: 10px; font-family: consolas;">- C A T A L O G I A -</h4>
  </section>
  <nav class="menubar bg-snow-1">
    <section class="menu-section-1">
      <a class="menu-item bg-night-4 fg-snow-3 active" href="../../index.php">
        <i class="fa fa-home"></i>
        <span>Kembali</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="form-insert.php">
        <i class="fa fa-plus"></i>
        <span>Tambah</span>
      </a>
    </section>
    <section class="menu-section-2">
      <div class="search-field">
        <form action="">
          <button type="submit" class="btn-search bg-night-4 fg-snow-3 fa-1x">
            <i class="fa fa-search"></i>
          </button>
          <input type="text" name="search" id="search" placeholder="Cari Judul Buku">
        </form>
      </div>
      <a class="menu-item bg-night-4 fg-snow-3 active" id="login" href="../../view/login.php">
        <i class="fa fa-user-graduate"></i>
        <span>Login</span>
      </a>
      <a class="menu-item bg-frost-3 fg-snow-3 active" id="register" href="../../view/register.php">
        <i class="fa fa-user-plus"></i>
        <span>Register</span>
      </a>
    </section>
  </nav>
  <main>
    <table class="table" style="margin: 30px;">
      <thead>
        <tr>
          <th>NO</th>
          <th>SAMPUL</th>
          <th>ISBN</th>
          <th>JUDUL</th>
          <th>DESKRIPSI</th>
          <th>PENULIS</th>
          <th>TAHUN TERBIT</th>
          <th>HARGA</th>
          <th>AKSI</th>
        </tr>
      </thead>
      <tbody>
        <?php $idx = 1; ?>
        <?php foreach ($books->get() as $data) : ?>
        <tr>
          <td><?= $idx++ ?></td>
          <td style="text-align: center;">
            <img src="../../storage/<?= $data['sampul'] ?>" alt="" width="50px">
          </td>
          <td><?= $data['isbn'] ?></td>
          <td><?= $data['judul'] ?></td>
          <td><?= $data['deskripsi'] ?></td>
          <td><?= $data['penulis'] ?></td>
          <td><?= $data['tahun_terbit'] ?></td>
          <td><?= $data['harga'] ?></td>
          <td>
            <div class="flex-button">
              <a class="btn-action-update bg-frost-3 fg-snow-3" id="update" href="form-update.php?id=<?= $data['id'] ?>">
                <i class="fa-regular fa-pen-to-square"></i>
              </a>
              <div>
                <form action="" method="post">
                  <input type="hidden" name="id" value="<?= $data['id'] ?>">
                  <button type="submit" class="btn-action-delete bg-frost-3 fg-snow-3" name="delete" style="font-size: 13pt;"
                          onclick="return confirm('Apakah anda yakin?')">
                    <i class="fa-regular fa-trash-can"></i>
                  </button>
                </form>
              </div>
            </div>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </main>
  <footer class="bg-night-0 fg-snow-1">
    <div class="fg-snow-1">
      <i class="fa-regular fa-copyright"></i>
    </div>
    <div class="fg-snow-1">
      <span class="name">Rizqi Ghozali</span>
    </div>
    <div>
      <span class="year bg-night-1 fg-snow-1">2023</span>
    </div>
  </footer>
  <script src="../../script/data.js"></script>
  <script src="../../script/main.js"></script>
  <script>
    let state = <?= $state ?>;
    if (state == 1) {
      alert('Data berhasil dihapus!');
      window.location.href = "index.php";
    }
    if (state == 0) {
      alert('Data gagal dihapus!');
    }
  </script>
</body>
</html>
