<?php

include '../koneksi.php';

if(isset($_POST['simpan'])){

    $judul = $_POST['judul'];
    $penerbit = $_POST['penerbit'];
    $pengarang = $_POST['pengarang'];
    $ringkasan = $_POST['ringkasan'];
    $stok = $_POST['stok'];
    $id_kategori = $_POST['id_kategori'];
    $cover = $_FILES['file']['name'];
    $ukuran	= $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    move_uploaded_file($file_tmp, 'file/'.$cover);
    

    $sql = "INSERT INTO buku VALUES('','$judul','$penerbit','$pengarang','$ringkasan','$cover','$stok','$id_kategori')";

    $res = mysqli_query($koneksi, $sql);

    $count = mysqli_affected_rows($koneksi);
         
    if($count==1){
        echo "<script>
                alert('Data Berhasil Ditambahkan'); 
                document.location.href='index.php';
              </script>";
        
    }
    else{
        echo "<script>
        alert('Data Berhasil Ditambahkan'); 
        document.location.href='tambah.php';
      </script>";
    }
}
?>