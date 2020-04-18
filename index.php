<?php 
    include 'koneksi.php';
    include 'aset/header.php';



    $query_buku = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM buku");
    $query_anggota = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM anggota");
    $query_pinjam = mysqli_query($koneksi, "SELECT COUNT(*) AS jumlah FROM peminjaman");

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>
<body>

         <div class="container">
             <div class="row mt-4">
                 <div class="col-md">
                    <h2><i class="fas fa-chart-line"></i> Dashboard</h2>
                    <hr class="bg-light">
                 </div>
             </div>


             <div class="row">
                 <div class="col-md-4">
                            <div class="card bg-danger" style="width: 18rem;">
                                <div class="card-body text-white">
                                     <h5 class="card-title">Jumlah Buku</h5>
                                        <?php while($buku = mysqli_fetch_array($query_buku)):?>
                                   <p class="card-text" style="font-size:60px"><?= $buku['jumlah'] ?></p>
                                        <?php endwhile; ?>
                                 <a href="buku/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                 </div>

                 <div class="col-md-4">
                            <div class="card bg-warning" style="width: 18rem;">
                                <div class="card-body text-white">
                                     <h5 class="card-title">Jumlah Anggota</h5>
                                            <?php while($anggota = mysqli_fetch_array($query_anggota)):?>
                                   <p class="card-text" style="font-size:60px"><?= $anggota['jumlah']?></p>
                                            <?php endwhile; ?>
                                 <a href="anggota/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                 </div>
                 <div class="col-md-4">
                            <div class="card bg-info" style="width: 18rem;">
                                <div class="card-body text-white">
                                     <h5 class="card-title">Jumlah Transaksi</h5>
                                                <?php while($pinjam = mysqli_fetch_array($query_pinjam)):?>
                                   <p class="card-text" style="font-size:60px"><?= $pinjam['jumlah']?></p>
                                                <?php endwhile; ?>
                                 <a href="peminjaman/index.php" class="text-white">Lebih detail <i class="fas fa-angle-double-right"></i></a>
                                </div>
                            </div>
                 </div>
             </div>

         </div>            







    <?php
    include 'aset/footer.php';
    ?>
</body>
</html>