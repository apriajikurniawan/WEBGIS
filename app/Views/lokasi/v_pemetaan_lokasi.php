<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Leaflet Map</title>
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    
    <style>
        #map {
            width: 100%;
            height: 100vh;
        }
    </style>
</head>
<body>
    <div id="map" style="width: 100%; height: 100vh; border-radius:15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        // Define tile layers
        var peta1 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/streets-v11'
        });

        var peta2 = L.tileLayer('https://mt1.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
            attribution: '© Google Maps',
            maxZoom: 20,
        });

        var peta3 = L.tileLayer('https://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
        });

        var peta4 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            maxZoom: 18,
            id: 'mapbox/outdoors-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q'
        });

        var peta5 = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        });

        var peta6 = L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=pk.eyJ1IjoibWFyZGFsaXVzIiwiYSI6ImNsZnVtbDdtZzAyYjMzdXRhdDN6djY5cWoifQ.Xqtyqa7hvGhQla2oAwpG_Q', {
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
                'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
            id: 'mapbox/dark-v10'
        });

        var peta7 = L.tileLayer('https://{s}.basemaps.cartocdn.com/light_all/{z}/{x}/{y}{r}.png', {
            maxZoom: 19,
            attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
                '<a href="https://carto.com/attributions">CARTO</a>'
        });

        var peta8 = L.tileLayer('https://server.arcgisonline.com/ArcGIS/rest/services/World_Street_Map/MapServer/tile/{z}/{y}/{x}', {
            attribution: 'Map data &copy; <a href="https://www.arcgis.com/">ArcGIS</a>'
        });

        var peta9 = L.tileLayer('https://{s}.google.com/vt/lyrs=y&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
        });

        var peta10 = L.tileLayer('https://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
            maxZoom: 20,
            subdomains: ['mt0', 'mt1', 'mt2', 'mt3'],
            attribution: 'Map data &copy; <a href="https://www.google.com/maps">Google Maps</a>'
        });

        // Create the map
        const map = L.map('map', {
            center: [3.220115090335827, 99.48265835817755],
            zoom: 10,
            layers: [peta3]
        });

        // Base layers for the control
        const baseLayers = {
            'Default': peta4,
            'GMaps': peta2,
            'Satellite': peta3,
            'OSM-Mapbox': peta4,
            'OSM': peta5,
            'Dark OSM': peta6,
            'Carto-OSM': peta7,
            'ArcGIS': peta8,
            'GMaps-Marker': peta9,
            'GMaps Terrain': peta10,
        };

        // Add layer control to the map
        const layerControl = L.control.layers(baseLayers).addTo(map);



        // var masjidIcon = L.icon({
        //     iconUrl: '', // Ganti dengan path ke ikon Anda
        //     iconSize: [38, 38], // Ukuran ikon (width, height)
        //     iconAnchor: [19, 38], // Titik jangkar (koordinat dalam ikon yang akan ditempatkan pada posisi marker)
        //     popupAnchor: [0, -38] // Koordinat popup relatif terhadap titik jangkar
        // });

<?php 
foreach ($lokasi as $key => $value) { ?>
    L.marker([<?= $value['latitude'] ?>, <?= $value['longitude'] ?>])
    .bindPopup(
  `<img src="<?= base_url('foto/' . $value['foto_lokasi']) ?>" 
       style="width: 300px; border-radius: 15px; box-shadow: 0 0 5px rgba(0, 0, 0, 0.5);"> 
   <br> <br>
   <h5><?= $value['nama_lokasi'] ?></h5><hr>
   <table style="width: 100%; table-layout: auto;">
     <tr>
       <td style="width: 40%;"><strong>Alamat</strong></td>
       <td> : </td>
       <td style="width: 70%;"><?= $value['alamat_lokasi'] ?></td>
     </tr>
     <tr>
       <td style="width: 40%;"><strong>Fasilitas</strong></td>
       <td> : </td>
       <td><?= $value['fasilitas'] ?></td>
     </tr>
     <tr>
       <td style="width: 40%;"><strong>Aksesibilitas</strong></td>
       <td> : </td>
       <td><?= $value['aksesibilitas'] ?></td>
     </tr>
     <tr>
       <td style="width: 40%;"><strong>Luas Parkir</strong></td>
       <td> : </td>
       <td><?= $value['luas_parkir'] ?></td>
     </tr>
     <tr>
       <td style="width: 40%;"><strong>TLP BKM</strong></td>
       <td> : </td>
       <td><?= $value['nomor_tlp_bkm'] ?></td>
     </tr>
   </table>
   <br>
    <div class="text-decoration-none text-center"><a href="https://dkm.or.id/kota/12-74/kota-tanjung-balai-sumatera-utara">WEBSITE DKM INDONESIA</a></div>`
)
    .addTo(map);
<?php } ?>

  
    </script>
</body>
</html>
