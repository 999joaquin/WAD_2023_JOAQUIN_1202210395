<?php

require 'connect.php';

// (1) Mulai session
session_start();
//

// (2) Ambil nilai input dari form registrasi
    // a. Ambil nilai input email
$email = $_POST['email'];
    // b. Ambil nilai input name
$name = $_POST['name'];
    // c. Ambil nilai input username
$username = $_POST['username'];
    // d. Ambil nilai input password
$password = $_POST['password'];
    // e. Ubah nilai input password menjadi hash menggunakan fungsi password_hash()
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

//

// (3) Buat dan lakukan query untuk mencari data dengan email yang sama dari nilai input email
$q1 = "SELECT * FROM users WHERE email = '$email'";
$r1 = mysqli_query($db, $q1);
//

// (4) Buatlah perkondisian ketika tidak ada data email yang sama ( gunakan mysqli_num_rows == 0 )
if(mysqli_num_rows($r1) == 0){
    // a. Buatlah query untuk melakukan insert data ke dalam database
    $q2 = "INSERT INTO users (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
    $r2 = mysqli_query($db, $q2);
    }
    // b. Buat lagi perkondisian atau percabangan ketika query insert berhasil dilakukan
    //    Buat di dalamnya variabel session dengan key message untuk menampilkan pesan penadftaran berhasil
    if($r2){
        $_SESSION['message'] = 'Registration success, please log in';
        $_SESSION['color'] = 'success';
        header("location:../views/login.php");
// 

// (5) Buat juga kondisi else
//     Buat di dalamnya variabel session dengan key message untuk menampilkan pesan error karena data email sudah terdaftar
    }else{
        $_SESSION['message'] = 'Registration failed.';
        header("location:../views/register.php");
}
//

?>