<!DOCTYPE html>
<html lang="en">
<?php require_once 'autoload.php'; ?>
<?php require_once 'layouts/header.php'; ?>
<body>
  <section class="title bg-snow-3 fg-night-4" style="padding: 15px 0; border-bottom: 5px solid #D8DEE9;">
    <i class="fa fa-book-bookmark" style="display: block; margin: 0.83em; font-size: 30pt;"></i>
    <h1 style="margin-bottom: 0px; font-family: consolas;">L I B R A R I U M</h1>
    <h4 style="margin-top: 10px; font-family: consolas;">- C A T A L O G I A -</h4>
  </section>
  <main>
    <div class="flex-form" style="margin: 50px;">
      <div class="flex" style="justify-content: center;">
        <h2 id="form-title">E D I T &ThickSpace; B U K U</h2>
      </div>
      <div class="flex" style="justify-content: center; align-items: center">
        <?php
          require_once 'model/Books.php';
          if (!Session::check()) {
            header('location:index.php');
          }
          $books = new Books();
          $data = $books->getById($_GET['id']);
        ?>
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
            <a class="menu-item bg-frost-3 fg-snow-3" href="crud.index.php" id="btn-kembali">
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
  <?php require_once 'layouts/footer.php'; ?>
  <?php
    $state = null;
    if (isset($_POST['submit'])) {
      $_POST['sampul'] = $data['sampul'];
      $state = $books->edit($_GET['id'], $_POST);
    }
  ?>
  <script>
    let res = document.getElementsByTagName('footer')[0];
    res.style.position = 'relative';
    let state = <?= $state ?>;
    if (state == 1) {
      alert('Proses ubah data buku berhasil!');
      window.location.href = "crud.index.php";
    }
  </script>
</body>
</html>
