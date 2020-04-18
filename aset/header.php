<?php
session_start();

if( !isset($_SESSION['id'])){
  header("Location: http://localhost/siperpus/login/index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/siperpus/aset/fontawesome/css/all.min.css">
    <title>SiPERPUS</title>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#"><i class="fas fa-book-reader text-white mr-2 "></i>SiPERPUS| Hai, <?= $_SESSION['nama']?> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="/siperpus/index.php">Dashboard <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="/siperpus/buku/index.php">Buku</a>
      <a class="nav-item nav-link" href="/siperpus/anggota/index.php">Anggota</a>
      <a class="nav-item nav-link" href="/siperpus/peminjaman/index.php">Peminjaman</a>
      <a class="nav-item nav-link" href="/siperpus/login/logout.php">Logout</a>
    </div>
  </div>
</nav>


    
</body>
</html>
<!-- Hai, <?= $_SESSION['nama']?> -->