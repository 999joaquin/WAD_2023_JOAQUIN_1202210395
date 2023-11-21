<!-- File ini berisi koneksi dengan database yang telah di import ke phpMyAdmin kalian -->


<?php
// Buatlah variable untuk connect ke database yang telah di import ke phpMyAdmin

// 
  
// Buatlah perkondisian jika tidak bisa terkoneksi ke database maka akan mengeluarkan errornya

// 

$host = "localhost:3308";
$user = "root";
$password = "";
$db = "modul3_wad";

$connect = mysqli_connect($host, $user, $password, $db);

if(!$connect){
    die("Not connected");
}

?>