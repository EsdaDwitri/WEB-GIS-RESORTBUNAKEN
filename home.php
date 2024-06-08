<?php
require "koneksi.php";
$sql = "SELECT Nama, `Titik Koordinat` FROM data_resort";
$result = $con->query($sql);

$locations = array();

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $koordinat = explode(",", $row["Titik Koordinat"]);
        if (count($koordinat) == 2) {
            $latitude = floatval(trim($koordinat[0]));
            $longitude = floatval(trim($koordinat[1]));
            $locations[] = array($row["Nama"], $latitude, $longitude);
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunaken Geomaps</title>
    <link rel="stylesheet" href="footer.css">
    <script src="fontawesome/all.js"></script>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
    <link rel="stylesheet" href="homereal.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet">
    <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Philosopher:ital,wght@0,400;0,700;1,400;1,700&display=swap" rel="stylesheet">

    <style>
        #map {
            width: 600px;
            height: 400px;
            padding: 0%;
            margin: auto;
            margin-top: auto;
            margin-bottom: auto;
        }

        .konten h1 {
            font-size: 80px;
            margin-top: -140px;
        }
    </style>
</head>

<body>
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
        <h1>Escape to Nature’s Embrace</h1>
      </div>

      <div class="button-container">
        <button><a href="#kenal" class="read-more-link" style="color: black;">READ MORE</a></button>
        <button><a href="about.php" class="read-more-link" style="color: black;">CONTACT US</a></button>
      </div>
      
  </div>

  <div class="pengenalan" id="kenal">
    <div class="teks">
      <h2>Welcome to <span>Bunaken GeoMaps.id</span></h2>
      <p>On Bunaken Island, one of the famous tourist destinations in North Sulawesi, you can find a resort that offers a unique experience by combining modern luxury and a touch of nature. These resorts are located on beautiful beaches, with stunning views of the clear blue sea and coral reefs.</p>
      <br>
      <p>Apart from comfortable and luxurious accommodation facilities, the resort on Bunaken Island also provides an atmosphere close to nature. They combine architectural and design elements inspired by the local culture of North Sulawesi.</p> <br>
      <p>By combining elements of nature, culture and luxury, the resort on Bunaken Island provides a unique and unforgettable holiday experience, where you can enjoy the beauty of nature while experiencing the rich traditions and herbal knowledge of the people of North Sulawesi.</p>

      <p class="tujuan"><a href="">Provides information about resort distribution</a></p>
      <p><a href="">Promoting resorts in Bunaken</a></p>
    </div>

    <div class="aset">
      <img src="image/resort.jpg" alt="">
    </div>
  </div>

  <div id="dataresort">
    <div><h4>Resort Location Maps</h4></div>
    <div id='map'></div>
    <div class="map-note">
      <h4>Jangkauan Peta</h4>
      <p>Bunaken Geomaps adalah sumber terkemuka untuk pemetaan geografis persebaran Resort di Pulau Bunaken,Provinsi Sulawesi Utara. Data lokasi kami berasal dari Google Maps dan website resmi tempat-tempat berharga di daerah ini. Website ini memuat sejumlah informasi mengenai : </p>
      <h4>Jumlah Lokasi Resort</h4>
      <h4 id="resortCount">20</h4>
    </div>
  </div>

  <div class="pengenalan"style="justify-content = space-between;" id="about">
    <div class="aset">
      <img src="image/logoo.png" alt="" style="width: 300px; border-radius: 10px; margin-right : 50px">
    </div>
    <div class="teks">
      <h2>Welcome to <span>Bunaken GeoMaps.id</span></h2>
      <p>Thank you for visiting Bunaken GeoMaps website. We appreciate your interest in exploring information about Bunaken Island, one of North Sulawesi's most famous tourist destinations that combines natural beauty, modern luxury and rich local culture.</p><br>
      <p>Through this website, we strive to share the unforgettable experiences offered by the resorts in Bunaken Island. The unique combination of nature, culture and luxury creates a truly special vacation atmosphere.</p><br>
      <p>See you on this mesmerizing island!</p>
    
    </p>
    </div>
  </div>

  <footer class="footer"  style="margin: 0; padding-inline 10px">
        <div class="container" style="padding-inline 10px; margin: -15px">
            <div class="row">
                <div class="berita" style="border-bottom: 1px solid white; display: flex; justify-content: space-between; padding-bottom: 70px">
                <div class="footer-col" style="padding : 10px">
                    <h4 style="font-size: 20px; text-align: left">Bunaken GeoMaps</h4>
                    <ul>
                        <li><a href="about.php" class="nav-link"><ion-icon name="chevron-forward-outline"></ion-icon> about us</a></li>
                        <li><a href="admin/login.php" class="nav-link"><ion-icon name="chevron-forward-outline"></ion-icon> Login </a></li>
                    </ul>
                </div>
                <div class="footer-col" style="padding : 10px">
                    <h4 style="font-size: 20px; text-align: left">Contact</h4>
                 <ul>
                        <li><a href="#"><ion-icon name="location-outline"></ion-icon> Malalayang</a></li>
                        <li><a href="#"><ion-icon name="call-outline"></ion-icon> - </a></li>
                        <li><a href="#"><ion-icon name="mail-outline"></ion-icon> bunakengeomaps18@gmail.com</a></li>
                    </ul>
                    <div class="kalala" >
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
                <div class="footer-col" style="padding : 10px">
                    <h4 style="font-size: 20px; text-align: left">Gallery</h4>
                    <ul>
                        <a href="galeri.php"><img src="img/galeri1.png" alt="Gallery"></a>
                        <a href="galeri.php"><img src="img/galeri2.png" alt="Gallery"></a>
                        <a href="galeri.php"><img src="img/galeri3.png" alt="Gallery"></a>
                        <a href="galeri.php"><img src="img/galeri4.png" alt="Gallery"></a>
                    </ul>
                </div>
                <div class="footer-col" style="padding : 10px;">
                    <h4 style="font-size: 20px; text-align: left">Newsletter</h4>
                    <ul>
                        <div>
                            <li><a href="#"> Hello, thank you for visiting. If there is any wrong or missing information please contact the admin, thank you.</a></li>
                        </div>
                    </ul>
                </div>
                </div>
                

                    <div class="lia">
                        <div class="logo">
                            <a href="#">&copy;bunaken geomaps.id, All Right Reserved. Designed By Sistem Informasi UNSRAT</a>
                        </div>
                        <div class="mama">
                            <ul>
                                <li><a href="#home">Home</a></li>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Help</a></li>
                                <li><a href="#">FAQ's</a></li>
                            </ul>
                        </div>
                    </div>

                <div class="panah">
                    <a href="#" class="scroll-top">
                        <i class="fas fa-arrow-up"></i>
                      </a>
                </div>
             </div>
            </div>
        </div>
    </footer>


  <script>
        var locations = <?php echo json_encode($locations); ?>;

        var map = L.map('map').setView([1.6194464381542166, 124.76606794399305], 13);
        mapLink = '<a href="http://openstreetmap.org">OpenStreetMap</a>';
        L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; ' + mapLink + ' Contributors',
            maxZoom: 18,
        }).addTo(map);

        for (var i = 0; i < locations.length; i++) {
            if (locations[i].length === 3) {
                var marker = L.marker([locations[i][1], locations[i][2]]).addTo(map);
                var namaResort = locations[i][0];
                var linkDetail = '<a href="detail.php?nama=' + encodeURIComponent(namaResort) + '">' + namaResort + '</a>';
                marker.bindPopup(linkDetail);
            }
        }

        function displayResortCount() {
            const resortCount = locations.length;
            const resortCountElement = document.getElementById('resortCount');
            resortCountElement.textContent = resortCount;
        }

        displayResortCount();
    </script>
  

  



</body>
</html>