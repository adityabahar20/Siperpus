<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa</title>
</head>
<body>
    <?php 
    
     include '../koneksi.php';
     $sql = "SELECT * FROM anggota ORDER BY nama";
     
     $res = mysqli_query($koneksi,$sql);
 
     $pinjam = array();
 
     while($data = mysqli_fetch_assoc($res)){
         $pinjam[] = $data;
     }

    include '../aset/header.php';
   
    ?>



        <div class="container">
            <div class="row mt-4">
                <div class="col-md">
                </div>
            </div>
        </div>

                    <div class="card">
            <div class="card-header">
            <h2 class="card-title"><i class="fas fa-user"></i> Data Anggota</h2>
            </div>
            <div class="card-body">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $no=1;
                    foreach($pinjam as $p){?>

                    <tr>
                        <th scope="row"><?=$no ?></th>
                        <td><?= $p['nama']?></td>
                        <td><?= $p['kelas']?></td>
                        <td>
                            <a href="detail.php?id_anggota=<?= $p["id_anggota"];?>" class="badge badge-success">Detail</a>
                            <a href="edit.php?id_anggota=<?= $p["id_anggota"];?>  " class="badge badge-warning">Edit</a>
                            <a href="hapus.php?id_anggota=<?= $p["id_anggota"];?> " onclick="return confirm('Yakin ingin menghapus data?')" class="badge badge-danger">Hapus</a>
                        </td>
                    </tr>
                    <?php
                    $no++;
                        }
                        ?>            

                 </table>
<a href="tambah.php"><button type="button" class="btn btn-outline-primary" style="width:100%; height:40px">Tambah Data Siswa</button></a>
</div>
</div>


<?php 
    include '../aset/footer.php';
    ?>
 
</body>
</html>