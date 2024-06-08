<?php
require "koneksi.php";
$queryResort = mysqli_query($con, "SELECT Nama, Harga, gambar  FROM data_resort");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galery</title>
    <link rel="stylesheet" href="galery.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main" id="#home">
        <div class="navbar">
            <label class="logo"><img src="image/bunaken-geomaps-641-x-126-px-1@2x.png" alt=""></label>
            <ul>
                <li><a href="home.php">Home</a></li>
                <li><a href="galeri.php">Data Resort</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="admin/login.php">Admin</a></li>
            </ul>
        </div>
        <div class="konten">
            <h1>WELCOME</h1>
            <p>Indulge in Your Dream Vacation at Bunaken Island's Premier Marine Resort</p>
        </div>
    </div>
    <div class="map-note">
        <h4>Bunaken Gallery</h4>
    </div>

    <div class="gallery">
    <?php
    $i = 1;
    while($data = mysqli_fetch_array($queryResort)) {
        $imageFilename = "image_" . $i . ".jpg";
    ?>
    <div class="gallery-item">
        <img src="image/<?php echo $imageFilename; ?>" alt="<?php echo $data['Nama']; ?>">
        <h4><?php echo $data['Nama']; ?></h4>
        <h3>Rp<?php echo $data['Harga']; ?></h3>
        <a href="detail.php?nama=<?php echo urlencode($data['Nama']); ?>">Lihat Detail</a>
    </div>
    <?php
        $i++; 
    }
    ?>
</div>
</body>
</html>