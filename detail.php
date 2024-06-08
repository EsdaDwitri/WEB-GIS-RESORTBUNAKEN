<?php
require "koneksi.php";

if (isset($_GET['nama'])) {
    $nama = $_GET['nama'];
    $queryResort = mysqli_query($con, "SELECT Nama, Harga, `Check-in`, `Check-out`, Kontak, fasilitas1, fasilitas2, fasilitas3, fasilitas4, fasilitas5, Galeri, `Titik Gmaps`,`Detail alamat`, `Deskripsi Singkat` FROM data_resort WHERE Nama = '$nama'");

    if ($queryResort && mysqli_num_rows($queryResort) > 0) {
        $data = mysqli_fetch_assoc($queryResort);
    } else {
        $data = array('Nama' => 'Nama Resort', 'Harga' => '0');
    }
} else { 
    header("Location: galeri.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Resort</title>
    <link rel="stylesheet" href="detail2.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

<body style="background-color: white;">

<div class="main" id="#home">
      <div class="navbar">
        <label class="logo"><img src="image/bunaken-geomaps-641-x-126-px-1@2x.png" alt=""></label>
        <ul>
          <li><a href="home.php">Home</a></li>
          <li><a href="galeri.php">Data Resort</a></li>
          <li><a href="about.php">About Us</a></li>
          <li><a href="admin/login.php">Admin</a></li>
        </ul>
      </div>

      <div class="konten">
        <h1><?php echo $data['Nama']; ?></h1>
        <p><?php echo $data['Deskripsi Singkat']; ?></p>
      </div>
      
  </div>

  <h2>Details Information</h2>
  <div class="coba">
    <div class="info2">
          <div class="detail-1">
              <h5>Resort Name</h5>
              <h5>Price/night</h5>
              <h5>Operating hours</h5>
              <h5><br></h5>
              <h5>Contact</h5>
              <h5>Address Details</h5>
              <h5>Link Galery</h5>
          </div>
          <div class="detail-2">
                <h5>: <?php echo $data['Nama']; ?> </h5>
                <h5> : Rp<?php echo $data['Harga']; ?></h5>
                <h5> : Check-in -> <?php echo $data['Check-in']; ?> WITA</h5>
                <h5> : Check-Out -> <?php echo $data['Check-out']; ?> WITA</h5>
                <h5> : <?php echo $data['Kontak']; ?></h5>
                <h5> : <?php echo $data['Detail alamat']; ?></h5>
                <h5>: <a href="<?php echo $data['Galeri']; ?>" target="_blank"><?php echo $data['Galeri']; ?></a></h5>
                
              </div>
          </div>
    <div class="lokasi2">
        <iframe src="<?php echo $data['Titik Gmaps']; ?>" width="400" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
  </div>

<div class="detail3" style="display: flex; justify-content: space-between; margin: 38px;">
  <div class="gambar" style="width: 800px ;">
      <img src="image/image_1.jpg" alt="Image 1" style="width: 300px ;">
      <img src="image/image_2.jpg" alt="Image 2" style="width: 300px ;">
      <img src="image/image_3.jpg" alt="Image 3" style="width: 300px ;">
      <img src="image/image_4.jpg" alt="Image 4" style="width: 300px ;">
  </div>

  <div class="fasilitas">
    <table style="background-color: white; border: none; font-family: Arial, sans-serif; width: 400px ; border: 3px solid #03989E">
      <tr style="background-color: #03989E; color: white;">
      <th style="padding: 15px 10px 10px 10px; text-align: center; background-color : #03989E; color: white ">MOST POPULAR FACILITIES</th>
    </tr>
    <tr>
    <td style="padding: 8px; border-bottom: 1px solid #03989E;"><?php echo $data['fasilitas1']; ?></td>
    </tr>
    <tr>
    <td style="padding: 8px; border-bottom: 1px solid #03989E;"><?php echo $data['fasilitas2']; ?></td>
    </tr>
    <tr>
    <td style="padding: 8px; border-bottom: 1px solid #03989E;"><?php echo $data['fasilitas3']; ?></td>
    </tr>
    <tr>
    <td style="padding: 8px; border-bottom: 1px solid #03989E;"><?php echo $data['fasilitas4']; ?></td>
    </tr>
    <tr>
    <td style="padding: 8px; border-bottom: 1px solid #03989E;"><?php echo $data['fasilitas5']; ?></td>
    </tr>
    </table>
    <img src="image/logoo.png" alt="Image 4" style="width: 300px; margin-top : 50px; text-align: center;">
      </div>

</div>

<div style="text-align: center; background-color: #DCF3DC; margin: 0; padding: 10px;">     
  <footer>
    <p>&copy; 2024 BUNAKEN GEOMAPS</p>
  </footer>
</div>   
      
</body>
</html>