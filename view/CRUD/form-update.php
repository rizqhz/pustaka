<?php

require_once '../../models/Books.php';

$books = new Books();

$data = $books->getById($_GET['id'])[0];

$state = null;
if (isset($_POST['submit'])) {
  $_POST['sampul'] = $data['sampul'];
  $state = $books->edit($_GET['id'], $_POST);
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
  <section class="title bg-snow-3 fg-night-4" style="padding: 15px 0; border-bottom: 5px solid #D8DEE9;">
    <i class="fa fa-book-bookmark" style="display: block; margin: 0.83em; font-size: 30pt;"></i>
    <h1 style="margin-bottom: 0px; font-family: consolas;">L I B R A R I U M</h1>
    <h4 style="margin-top: 10px; font-family: consolas;">- C A T A L O G I A -</h4>
  </section>
  <main>
    <div class="flex-form" style="margin: 50px;">
      <div class="flex" style="justify-content: center;">
        <h2 id="form-title">T A M B A H &ThickSpace; B U K U</h2>
      </div>
      <div class="flex" style="justify-content: center; align-items: center">
        <form id="form-insert" action="" method="post" enctype="multipart/form-data" class="flex" style="width: 85%;">
          <label for="isbn" class="form-label">ISBN</label>
          <input type="text" name="isbn" id="isbn" value="<?= $data['isbn']?>">
          <label for="judul" class="form-label">Judul</label>
          <input type="text" name="judul" id="judul" value="<?= $data['judul']?>">
          <label for="deskripsi" class="form-label">Deskripsi</label>
          <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"><?= $data['deskripsi'] ?></textarea>
          <label for="penulis" class="form-label">Penulis</label>
          <input type="text" name="penulis" id="penulis" value="<?= $data['penulis'] ?>">
          <label for="tahun-terbit" class="form-label">Tahun Terbit</label>
          <input type="number" name="tahun_terbit" id="tahun-terbit" value="<?= $data['tahun_terbit'] ?>">
          <label for="harga" class="form-label">Harga</label>
          <input type="number" name="harga" id="harga" value="<?= $data['harga'] ?>">
          <label for="sampul" class="form-label">Sampul</label>
          <input type="file" name="sampul" id="sampul">
          <div class="flex" style="margin: 30px 0; flex-direction: row; gap: 15px;">
            <a class="menu-item bg-frost-3 fg-snow-3" href="index.php" id="btn-kembali">
              <i class="fa fa-angle-left"></i>
              <span>Kembali</span>
            </a>
            <button type="reset" class="menu-item bg-frost-3 fg-snow-3" id="btn-reset">
              <i class="fa fa-rotate"></i>
              <span>Reset</span>
            </button>
            <button type="submit" class="menu-item bg-aurora-green fg-snow-3" id="btn-simpan" name="submit">
              <i class="fa fa-floppy-disk"></i>
              <span>Simpan</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
  <footer class="bg-night-0 fg-snow-1" style="position: relative;">
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
      alert('Proses ubah data buku berhasil!');
      window.location.href = "index.php";
    }
    if (state == 0) {
      alert('Proses ubah data buku gagal!');
    }
  </script>
</body>
</html>
