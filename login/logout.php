<?php
session_start();

session_destroy();
setcookie("message", "Anda Telah Berhasil Logout", time()+3600);
header("Location: http://localhost/siperpus/login/index.php");

?>