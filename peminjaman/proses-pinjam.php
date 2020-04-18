<?php

session_start();

include '../koneksi.php';

include 'fungsi-transaksi.php';

if(isset($_POST['submit'])){


    $id_anggota = $_POST['id_anggota'];
    $id_buku = $_POST['id_buku'];
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_jatuh_tempo = date('Y-m-d',strtotime($tgl_pinjam.'+7 days'));
    $id_petugas = $_SESSION['id'];

    $sql = "INSERT INTO peminjaman VALUES('','$id_anggota','$id_buku','$tgl_pinjam','$tgl_jatuh_tempo','0000-00-00','$id_petugas','0','dipinjam')";

    $stok = ambilstok($id_buku);

    // var_dump($sql);

    if(cekpinjam($id_anggota) && $stok > 0){
        $res = mysqli_query($koneksi,$sql);

        $count = mysqli_affected_rows($koneksi);

        $stok_update = $stok - 1;
        if($count == 1){
            updatestok($id_buku,$stok_update);
            header("Location: index.php");
        }
        else{
            header("Location: form-pinjam.php");
        }
}
if(cekPinjam($id_anggota)==false){
    echo "<script>
                alert('Gagal Meminjam Buku, Stok buku habis atau mungkin anda sudah meminjam buku'); 
                document.location.href='index.php';
              </script>";
  }
}


?>