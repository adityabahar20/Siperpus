<!-- proses pengolahan data -->
<?php
session_start();
$koneksi = mysqli_connect("localhost","root","","db_perpus");

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM petugas WHERE username='$username' AND password='$password' ";
    $res = mysqli_query($koneksi,$sql);

    $count = mysqli_affected_rows($koneksi);
    $data_login = mysqli_fetch_assoc($res);

    if($count == 1){

        $_SESSION['id'] = $data_login['id_petugas'];
        $_SESSION['nama'] = $data_login['nama_petugas'];


        header("Location:../index.php");

        
    }else{

        header("Location:index.php");

    }
}
?>

<!-- form login -->
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
 

 
	<div class="kotak_login">
        <p class="tulisan_login">LOGIN</p>
        	
 
		<form action="" method="post">
			<label>Username</label>
			<input type="text" name="username" class="form_login" placeholder="Username .." required="required">
 
			<label>Password</label>
			<input type="password" name="password" class="form_login" placeholder="Password .." required="required">
 
			<input type="submit" class="tombol_login" value="LOGIN" name="login">

			<br/>
			<br/>
			<center>
				<a class="link" href="#"></a>
			</center>
		</form>
		
	</div>
 
</body>
</html>

