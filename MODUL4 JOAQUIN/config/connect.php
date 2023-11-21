<!-- File ini berisi koneksi dengan database MySQL -->
<?php 

// (1) Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin
$host = "localhost:3308";
$user = "root";
$pass = "";
$database = "modul4";

$db = mysqli_connect($host, $user, $pass, $database);
// 


// (2) Buatlah perkondisian untuk menampilkan pesan error ketika database gagal terkoneksi
if (!$db){
    die("Connection interrupted: ".mysqli_connect_error());
}
// 
 
?>