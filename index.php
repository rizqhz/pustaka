<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/favicons/site.webmanifest">
  <link rel="stylesheet" href="style/extern/fontawesome/css/all.min.css">
  <link rel="stylesheet" href="style/main.css">
  <script src="script/extern/jquery-3.6.4.js"></script>
  <title>Librarium Catalogia</title>
</head>
<body onload="view(9)">
  <section class="title bg-snow-3 fg-night-4" style="padding: 15px 0;">
    <i class="fa fa-book-bookmark" style="display: block; margin: 0.83em; font-size: 30pt;"></i>
    <h1 style="margin-bottom: 0px; font-family: consolas;">L I B R A R I U M</h1>
    <h4 style="margin-top: 10px; font-family: consolas;">- C A T A L O G I A -</h4>
    <a class="menu-item bg-night-4 fg-snow-3 active" href="view/CRUD/index.php"
       style="position: absolute; right: 0; top: 0; margin: 15px; font-size: 15pt;">
      <i class="fa fa-gear"></i>
      <span>CRUD</span>
    </a>
  </section>
  <nav class="menubar bg-snow-1">
    <section class="menu-section-1">
      <a class="menu-item bg-night-4 fg-snow-3 active" href="">
        <i class="fa fa-home"></i>
        <span>Home</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="">
        <i class="fa fa-book"></i>
        <span>Filsafat</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="">
        <i class="fa fa-book"></i>
        <span>Matematika</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="">
        <i class="fa fa-book"></i>
        <span>Bahasa</span>
      </a>
      <a class="menu-item bg-snow-3 fg-night-4" href="">
        <i class="fa fa-book"></i>
        <span>Komputer</span>
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
      <a class="menu-item bg-night-4 fg-snow-3 active" id="login" href="view/login.php">
        <i class="fa fa-user-graduate"></i>
        <span>Login</span>
      </a>
      <a class="menu-item bg-frost-3 fg-snow-3 active" id="register" href="view/register.php">
        <i class="fa fa-user-plus"></i>
        <span>Register</span>
      </a>
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
  <script src="script/data.js"></script>
  <script src="script/main.js"></script>
</body>
</html>
