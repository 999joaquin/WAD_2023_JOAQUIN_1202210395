<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title>
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>

            <?php
            include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)
            
            $sql = "SELECT * FROM showroom_mobil";
            $query = mysqli_query($connect, $sql);
            $mobil = mysqli_fetch_assoc($query);
            
            
            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan dalam bentuk tabel 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

            //<!--  **********************  1  **************************     -->

            if($query){
                while(mysqli_fetch_assoc($query)){
                    echo "<tr>";
                    echo "<td>".$mobil['nama_mobil']."</td> | ";
                    echo "<td>".$mobil['brand_mobil']."</td> | ";
                    echo "<td>".$mobil['warna_mobil']."</td> | ";
                    echo "<td>".$mobil['tipe_mobil']."</td> | ";
                    echo "<td>".$mobil['harga_mobil']."</td> | ";

                    echo "<td>";
                    echo "<a href='form_detail_mobil.php?id=".$mobil['id']."'>SHOW DATA</a>";
                    echo "</td>";
                    echo "</tr>";
                }
            

            //<!--  **********************  1  **************************     -->

            //<!--  **********************  2  **************************     -->

            }elseif(mysql_num_rows($query) < 1){
                die("tidak ada data dalam tabel");
            }
            
            //<!--  **********************  2  **************************     -->
            ?>
        </div>
    </center>
</body>
</html>
