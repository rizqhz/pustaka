<!DOCTYPE html>
<html lang="en">
<?php require_once 'autoload.php'; ?>
<?php require_once 'layouts/header.php'; ?>
<body onload="view(9)">
  <section class="title bg-snow-3 fg-night-4" style="padding: 15px 0;">
    <i class="fa fa-book-bookmark" style="display: block; margin: 0.83em; font-size: 30pt;"></i>
    <h1 style="margin-bottom: 0px; font-family: consolas;">L I B R A R I U M</h1>
    <h4 style="margin-top: 10px; font-family: consolas;">- C A T A L O G I A -</h4>
    <?php if (Session::check()) { ?>
    <form action="" method="post">
      <button id="logout" class="menu-item bg-aurora-red fg-snow-3 active" type="submit" name="logout"
         style="position: absolute; right: 0; top: 0; margin: 15px; font-size: 15pt;">
        <i class="fa fa-person-running"></i>
        <span>Logout</span>
      </button>
    </form>
    <?php } ?>
  </section>
  <nav class="menubar bg-snow-1">
    <section class="menu-section-1">
      <a class="menu-item bg-night-4 fg-snow-3 active" href="<?= $_SERVER['PHP_SELF'] ?>">
        <i class="fa fa-home"></i>
        <span>Home</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="?buku=filsafat">
        <i class="fa fa-book"></i>
        <span>Filsafat</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="?buku=matematika">
        <i class="fa fa-book"></i>
        <span>Matematika</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="?buku=bahasa">
        <i class="fa fa-book"></i>
        <span>Bahasa</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="?buku=komputer">
        <i class="fa fa-book"></i>
        <span>Komputer</span>
      </a>
    </section>
    <section class="menu-section-2">
      <div class="search-field">
        <form action="">
          <button type="button" class="btn-search bg-night-4 fg-snow-3 fa-1x">
            <i class="fa fa-search"></i>
          </button>
          <input type="text" name="search" id="search" placeholder="Cari Judul Buku">
        </form>
      </div>
      <?php if (Session::check()) { ?>
      <a class="menu-item bg-night-4 fg-snow-3 active" id="login" href="crud.index.php">
        <i class="fa fa-gear"></i>
        <span>CRUD</span>
      </a>
      <?php $info = Session::getInfo(); ?>
      <a class="menu-item bg-frost-3 fg-snow-3 active" id="register" href="?user">
        <i class="fa fa-user-graduate"></i>
        <span><?= $info['name'] ?></span>
      </a>
      <?php } else { ?>
      <a class="menu-item bg-night-4 fg-snow-3 active" id="login" href="auth.login.php">
        <i class="fa fa-user-graduate"></i>
        <span>Login</span>
      </a>
      <a class="menu-item bg-frost-3 fg-snow-3 active" id="register" href="auth.register.php">
        <i class="fa fa-user-plus"></i>
        <span>Register</span>
      </a>
      <?php } ?>
    </section>
  </nav>
  <main></main>
  <section class="expand">
    <div class="spinner"></div>
    <button onclick="view(3)" id="more" class="btn-more fg-night-4 bg-snow-2">
      <i class="fa fa-spinner"></i>
      <span>Show More</span>
    </button>
  </section>
  <?php require_once 'layouts/footer.php'; ?>
</body>
</html>

<?php
  if (isset($_POST['logout'])) {
    Auth::logout();
  }
?>
