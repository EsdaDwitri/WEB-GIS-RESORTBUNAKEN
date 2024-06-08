<?php
require "koneksi.php";
$queryResort = mysqli_query($con, "SELECT Nama, Harga, gambar  FROM data_resort");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="aboutus.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

</head>
<body>
    <div class="main" id="#home">
        <div class="navbar">
            <label class="logo"><img src="image/bunaken-geomaps-641-x-126-px-1@2x.png" alt=""></label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="galeri.php">Data Resort</a></li>
                <li><a href="#">About Us</a></li>
                <li><a href="admin/login.php">Admin</a></li>
            </ul>
        </div>
        <div class="konten">
            <h1>HELLOW</h1>
            <p>Sistem Informasi Persebaran Resort dan Fasilitas Pendukung Wisata Bahari</p>
        </div>
    </div>
    <div class="map-note">
        <h4>KELOMPOK 3</h4>
    </div>

    <div class="gallery">
    <div class="gallery-item">
        <img src="img/foto_1.png" alt="">
        <h4>Esda Dwitri</h4>
        <h3>221011060109</h3>
    </div>

    <div class="gallery-item">
        <img src="img/foto_2.png" alt="">
        <h4>Schin N. Pangaribuan</h4>
        <h3>221011060125</h3>
    </div>

    <div class="gallery-item">
        <img src="img/foto_3.png" alt="">
        <h4>Lia Fransina Rumteh</h4>
        <h3>221011060103</h3>
    </div>

    <div class="gallery-item">
        <img src="img/foto_4.png" alt="">
        <h4>David K.Manullang</h4>
        <h3>221011060107</h3>
    </div>

    <div class="gallery-item">
        <img src="img/foto_5.png" alt="">
        <h4>Debora Rifni Igir</h4>
        <h3>221011060100</h3>
    </div>

    <div class="gallery-item">
        <img src="img/foto_6.png" alt="">
        <h4>Zhara I. K. Dalentang</h4>
        <h3>221011060130</h3>
    </div>
    
</div>

<div class="galerimner" style="align-items : center">
<h4>OUR LECTURER</h4>
    <img src="img/foto_8.png" alt=""  style="width: 50%; margin-left: 400px";>
        
        <h3 style="font-size: 30px; text-align: center">ADITYA LAPU KALUA ST., M.C.I.S</h3>
</div>

<div style="text-align: center; background-color: #DCF3DC; margin: 0; padding: 10px; margin-top: 50px">     
  <footer>
    <p>&copy; 2024 BUNAKEN GEOMAPS</p>
  </footer>
</div>   
</body>
</html>