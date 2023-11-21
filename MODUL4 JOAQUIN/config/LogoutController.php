<?php 

// (1) Hapus cookie dengan key id 
$cookie_name = "id";
$cookie_value = '';
$time = time() - 60 * 60;
setcookie($cookie_name, $cookie_value, $time, "/");
// 

// (2) Mulai session
session_start();
//

// (3) Hapus semua session yang berlangsung
session_destroy();
//

// (4) Lakukan redirect ke halaman login awal
header("Location:../views/login.php");
//

exit;

?>