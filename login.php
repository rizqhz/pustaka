<!DOCTYPE html>
<html lang="en">
<?php require_once 'autoload.php'; ?>
<?php require_once 'layouts/header.php'; ?>
<body>
  <main>
    <div class="flex-form" style="margin: 50px;">
      <div class="flex" style="justify-content: center;">
        <h2 id="form-title">L O G I N</h2>
      </div>
      <div class="flex" style="justify-content: center; align-items: center">
        <form id="form-insert" action="" method="post" class="flex" style="width: 65%;">
          <label for="username" class="form-label">Username</label>
          <input type="text" name="username" id="username">
          <label for="password" class="form-label">Password</label>
          <input type="password" name="password" id="password">
          <div class="flex" style="margin: 30px 0; flex-direction: row; gap: 15px;">
            <a class="menu-item bg-frost-3 fg-snow-3" href="index.php" id="btn-kembali">
              <i class="fa fa-angle-left"></i>
              <span>Kembali</span>
            </a>
            <button type="reset" class="menu-item bg-frost-3 fg-snow-3" id="btn-reset">
              <i class="fa fa-rotate"></i>
              <span>Ulang</span>
            </button>
            <button type="submit" class="menu-item bg-aurora-green fg-snow-3" id="btn-simpan" name="login">
              <i class="fa fa-arrow-right-to-bracket"></i>
              <span>Masuk</span>
            </button>
          </div>
        </form>
      </div>
    </div>
  </main>
</body>
</html>

<?php
  if (isset($_POST['login'])) {
    Auth::login($_POST);
  }
?>
