


<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.css">
    <!-- SweetAlert JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.min.js"></script>

<!-- B5 -->
           <!-- Google Font: Source Sans Pro -->
           <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../assets5/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="../assets5/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="../assets5/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="../assets5/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../assets5/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="../assets5/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="../assets5/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="../assets5/plugins/summernote/summernote-bs4.min.css">
        <!-- B5 -->


    
<div class="row card">
    <div class="col-lg-12 mt-2">
        <div class="row">
            <?php
                if (session()->getFlashdata('pesan')) {
                    echo '<script type="text/javascript">';
                    echo 'Swal.fire({';
                    echo 'icon: "success",';
                    echo 'title: "Berhasil! Tambah Data Lokasi",';
                    echo 'text: "' . session()->getFlashdata('pesan') . '",';
                    echo 'showConfirmButton: false,';
                    echo 'timer: 2500';
                    echo '});';
                    echo '</script>';
                }

                // if (session()->getFlashdata('pesan')) {
                //     echo '<span class="card-title mt-1 alert alert-success">';
                //     echo '<span>';
                //     echo session()->getFlashdata('pesan');
                    
                // } 
                ?> 
            <div class="col-sm-7">
                <?php echo form_open_multipart('Lokasi/insertData') ?>
                    <div class="card">
                        <h3 class="text-primary text-center"><?= $title ?></h3>
                    </div>
                    
                    <div class=" text-center" style="position: relative; top:10px;">
                        <div id="map" style="width: 100%; height: 120vh; border-radius:15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
                         
                         <br>
                        
                         <div class="container">
                             <img id="preview" src="icon/foto.png" style="width: 450px; height:250px; position:relative; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px; border-radius:20px;">
                             <br>
                             <span class="text-center text-mute">Foto Masjid</span>
                        </div>
                    </div>
            
                </div>
   
            <div class="col-sm-5">
                <div class="form-group">
                    <label>Nama Masjid</label>
                    <input class="form-control" name="nama_lokasi" value="<?= set_value('nama_lokasi') ?>" autofocus>
                    <p class="text-danger"><?= validation_show_error('nama_lokasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" name="alamat_lokasi" value="<?= set_value('alamat_lokasi') ?>">
                    <p class="text-danger"><?= validation_show_error('alamat_lokasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Fasilitas</label>
                    <input class="form-control" name="fasilitas" value="<?= set_value('fasilitas') ?>">
                    <p class="text-danger"><?= validation_show_error('fasilitas') ?></p>
                </div>
                
                <div class="form-group">
                    <label>Aksesibilitas <span class="text-dark">(Tersedia Untuk Disabilitas)</span></label>
                    <input class="form-control" name="aksesibilitas" value="<?= set_value('aksesibilitas') ?>">
                    <p class="text-danger"><?= validation_show_error('aksesibilitas') ?></p>
                </div>

                <div class="form-group">
                    <label>Transportasi Umum Terdekat</label>
                    <input class="form-control" name="transportasi" value="<?= set_value('transportasi') ?>">
                    <p class="text-danger"><?= validation_show_error('transportasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Nomor TLP BKM</label>
                    <input type="number" inputmode="numeric" class="form-control" name="nomor_tlp_bkm" value="<?= set_value('nomor_tlp_bkm') ?>">
                    <p class="text-danger"><?= validation_show_error('nomor_tlp_bkm') ?></p>
                </div>


                <div class="form-group">
                    <label>Luas Lahan</label>
                        <div class="d-flex align-items-center">
                            <input class="form-control me-2" name="luas_lahan" value="<?= set_value('luas_lahan') ?>">
                            <span class="bg-light px-2">M<sup>2</sup></span>
                        </div>
                    <p class="text-danger"><?= validation_show_error('luas_lahan') ?></p>
                </div>

                
                <div class="form-group">
                    <label>Luas Area Parkir</label>
                    <div class="d-flex align-items-center">
                            <input class="form-control me-2" name="luas_parkir" value="<?= set_value('luas_parkir') ?>">
                            <span class="bg-light px-2">M<sup>2</sup></span>
                        </div>
                    <p class="text-danger"><?= validation_show_error('luas_parkir') ?></p>
                </div>

                <div class="form-group">
                    <label>Luas Area Wudhu</label>
                        <div class="d-flex align-items-center">
                            <input class="form-control me-2" name="area_wudhu" value="<?= set_value('area_wudhu') ?>">
                            <span class="bg-light px-2">M<sup>2</sup></span>
                        </div>
                    <p class="text-danger"><?= validation_show_error('area_wudhu') ?></p>
                </div>



                <div class="form-group">
                    <label>Kapasitas</label>
                        <div class="d-flex align-items-center">
                            <input type="number" inputmode="numeric" class="form-control me-2" name="kapasitas" value="<?= set_value('kapasitas') ?>">
                            <span class="bg-light px-2" style="font-size: 30px;">&plusb;</span>
                        </div>
                    <p class="text-danger"><?= validation_show_error('kapasitas') ?></p>
                </div>
                
                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" name="latitude" id="latitude" value="<?= set_value('latitude') ?>" placeholder="Klik Koordinat pada Map">
                    <p class="text-danger"><?= validation_show_error('latitude') ?></p>
                </div>

                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" name="longitude" id="longitude" value="<?= set_value('longitude') ?>">
                    <p class="text-danger"><?= validation_show_error('longitude') ?></p>
                </div>

                <div class="card form-group" style="background-color: #f9f9f9;">
                    <div class="card-body">
                        <input type="file" class="form-control" name="foto_lokasi" id="foto_lokasi" onchange="tampilkanPreview(this,'preview')">
                        <p class="text-danger"><?= validation_show_error('foto_lokasi') ?></p>
                        <span class="text-mute text-center small">Drop Foto</span>
                    </div>

                    <style>
                                    input[type="number"]::-webkit-outer-spin-button,
                    input[type="number"]::-webkit-inner-spin-button {
                        -webkit-appearance: none;
                        margin: 0;
                    }

                    /* Untuk Firefox */
                    input[type="number"] {
                        -moz-appearance: textfield;
                    }
                    </style>
                    <script>
                        function tampilkanPreview(userfile, idpreview) {
                                                var gb = userfile.files;
                                                for (var i = 0; i < gb.length; i++) {
                                                    var gbPreview = gb[i];
                                                    var imageType = /image.*/;
                                                    var extension = gbPreview.name.split('.').pop().toLowerCase();
                                                    var allowedExtensions = ['jpg', 'jpeg', 'png'];
                                                    var preview = document.getElementById(idpreview);
                                                    var reader = new FileReader();
                                                    if (gbPreview.type.match(imageType)) {
                                                        //jika tipe data sesuai
                                                        preview.file = gbPreview;
                                                        reader.onload = (function(element) {
                                                            return function(e) {
                                                                element.src = e.target.result;
                                                            };
                                                        })(preview);
                                                        //membaca data URL gambar
                                                        reader.readAsDataURL(gbPreview);
                                                    } else {
                                                        //jika tipe data tidak sesuai
                                                        alert("Tipe file tidak sesuai. Gambar harus extensi (.png, .jpg, .jpeg) ");
                                                    }
                                                }
                                            }
                    </script>
                </div> <br>

                <div class="d-flex">
                    <button type="submit" class="card-title text-white btn btn-primary me-5">SIMPAN</button>
                    <button type="reset" class="card-title text-white btn btn-danger ms-5">RESET</button>
                </div>
            </div>
           

            <div class=" mb-2">
                
            </div>
          





<script>
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

    const map = L.map('map', {
	center: [3.220115090335827, 99.48265835817755],
	zoom: 12,
	layers: [peta3]
    });

    const baseLayers = {
	'Default': peta4,
	'GMaps': peta2,
    'Satellite': peta3,
    'OSM-Mapbox': peta4,
    'OSM': peta5,
    'Dark OSM': peta6,
    'Carto-OSM': peta7,
    'ArsGIS': peta8,
    'GMaps-Marker': peta9,
    'gmaps1': peta10,
    };

    const layerControl = L.control.layers(baseLayers, null, {
        collapsed: false
    }).addTo(map);

     //GetCoordinat
     var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");

    //samakan titik koordinat dengan koordinat center peta
    var curLocation = [3.220115090335827, 99.48265835817755];
    map.attributionControl.setPrefix(false);

    var marker = new L.marker(curLocation, {
    draggable: true,
    });

    //mengambil coordinat ketika marker digeser/pindah
    marker.on('dragend', function(e) {
        var position = marker.getLatLng();
        marker.setLatLng(position, {
            curLocation,
        }).bindPopup(position).update();
        $("#Latitude").val(position.lat);
        $("#Longitude").val(position.lng);
        $("#Posisi").val(position.lat + ',' + position.lng);
    });

    //mengambil koordinat ketika diclik
    map.on('click', function(e) {
        var lat = e.latlng.lat;
        var lng = e.latlng.lng;
        if (!marker) {
            marker = L.marker(e.latlng).addTo(map);

        } else {
            marker.setLatLng(e.latlng);
        }
        latInput.value = lat;
        lngInput.value = lng;
        posisi.value = lat + ',' + lng;
    });
    
    map.addLayer(marker);
</script>


<?php echo form_close() ?>
        </div>
    </div>
</div>






<!-- B5 -->
 
<!-- jQuery -->
<script src="../assets5/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="../assets5/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="../assets5/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="../assets5/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="../assets5/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="../assets5/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="../assets5/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="../assets5/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="../assets5/plugins/moment/moment.min.js"></script>
<script src="../assets5/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../assets5/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="../assets5/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="../assets5/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../assets5/dist/js/adminlte.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../assets5/dist/js/demo.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="../assets5/dist/js/pages/dashboard.js"></script>
<!-- B5 -->