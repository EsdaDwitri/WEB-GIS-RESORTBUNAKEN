<?php
    require "session.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bunaken Geomaps</title>
  <link rel="stylesheet" href="homereal.css">
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.3/dist/leaflet.css" />
  <script src="https://unpkg.com/leaflet@1.0.3/dist/leaflet.js"></script>
        

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
          font-size : 80px ;
          margin-top : -140px;
        }
    </style>
</head>

<body>
  <div class="main" id="#home">
      <div class="navbar">
        <label class="logo"><img src="image/bunaken-geomaps-641-x-126-px-1@2x.png" alt=""></label>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#dataresort">Data Resort</a></li>
          <li><a href="galeri.php">Galery</a></li>
          <li><a href="#">About</a></li>
          <li><a href="admin/login.php">Admin</a></li>
        </ul>
      </div>

      <div class="konten">
        <h1>Escape to Nature’s Embrace</h1>
      </div>

      <div class="button-container">
          <button>READ MORE</button>
          <button>CONTACT US</button>
      </div>
      
  </div>

  <div class="pengenalan">
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


    <script>
        var locations = [
            ["Bastianos Bunaken Dive and resort", 1.618212800782353, 124.76738658465862, "detail.php"],
            ["Panorama Backpackers", 1.6152226257753435, 124.7696305404819,"detail.php"],
            ["Bunaken Oasis Dive Resort and Spa", 1.621485,124.765030,"detail.php"],
            ["Novita Homestay & Resto Orange", 1.5962552843902924, 124.78124998835345,"detail.php"],
            ["LBunaken Cha Cha Nature Resort", 1.6259135074238213, 124.7763732404819,"detail.php"],
            ["Bunaken Sea Garden Dive Resort", 1.611638191846672, 124.78055061534359,"detail.php"],
            ["Two Fish Resort", 1.609425880568349, 124.78018625767068,"detail.php"],
            ["The Village Bunaken", 1.6092179224535235, 124.7808874380725,"detail.php"],
            ["Bunaken Beach Resort", 1.607422216834276, 124.78026260793976,"detail.php"],
            ["3WILL Bunaken Dive Resort", 1.596644,124.780791,"detail.php"],
            ["Happy Gecko Dive Resort", 1.6204219250195333, 124.76488141534139,"detail.php"],
            ["Bunaken Divers Seabreeze Resoort", 1.5996739161547373, 124.78143456376309,"detail.php"],
            ["Arto Moro Bunaken", 1.596617064524215, 124.78153946561046,"detail.php"],
            ["Bunaken Villa Queenns Dive", 1.6028644404126826, 124.78021234195536,"detail.php"],
            ["Raja Laut Dive Resort", 1.6004993148802094, 124.78137207827507,"detail.php"],
            ["Franky's Homestay", 1.596644,124.780791,"detail.php"],
            ["Sunset Guess House & Bar", 1.6056470902157751, 124.7804121926101,"detail.php"],
            ["Coco Homestay Bunaken", 1.5966360297700766, 124.77917360000002,"detail.php"],
            ["4sisters homestay", 1.59691390638531, 124.78095862698797,"detail.php"],
            ["Naca Homestay", 1.596935355723141, 124.78093716931726,"detail.php"],
            ["ASESWIFO HOME", 1.596935355723141, 124.78093716931726,"detail.php"],
];

var map = L.map('map').setView([1.6194464381542166, 124.76606794399305], 13);
mapLink =
  '<a href="http://openstreetmap.org">OpenStreetMap</a>';
L.tileLayer(
  'http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '&copy; ' + mapLink + ' Contributors',
    maxZoom: 18,
  }).addTo(map);

    for (var i = 0; i < locations.length; i++) {
      var marker = new L.marker([locations[i][1], locations[i][2]])
        .bindPopup("<b>" + locations[i][0] + "</b><br><a href=" + locations[i][3] + ">Detail</a>");
  
    marker.addTo(map);
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