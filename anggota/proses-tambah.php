<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){

    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $telp = $_POST['telp'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $id_level = 3;

    $sql = "INSERT INTO anggota VALUES('','$nama','$kelas','$telp','$username','$password','$id_level')";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);
    var_dump($count);
    if($count >0){
        echo 
        "<script> 
        alert('Data Berhasil Ditambahkan'); 
        document.location.href='index.php';
        </script>";
    }
    
    else{
        "<script> 
        alert('Data Gagal Ditambahkan'); 
        document.location.href='index.php';
        </script>";
    }
}

?>