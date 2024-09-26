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
            <?php if (session()->getFlashdata('pesan')): ?>
                <script type="text/javascript">
                    Swal.fire({
                        icon: 'success',
                        title: 'Berhasil! Update Data Lokasi',
                        text: '<?= session()->getFlashdata('pesan') ?>',
                        showConfirmButton: false,
                        timer: 2500
                    });

                      // if (session()->getFlashdata('pesan')) {
                //     echo '<span class="card-title mt-1 alert alert-success">';
                //     echo '<span>';
                //     echo session()->getFlashdata('pesan');
                    
                // } 
                </script>
            <?php endif; ?>

            <div class="col-sm-6">
                <?php $errors = validation_errors(); ?>
                <?= form_open_multipart('Lokasi/updateData/' . $lokasi['id_lokasi']) ?>
                <div class="form-group">
                    <label>Nama Masjid</label>
                    <input class="form-control" name="nama_lokasi" value="<?= $lokasi['nama_lokasi'] ?>">
                    <p class="text-danger"><?= validation_show_error('nama_lokasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Alamat</label>
                    <input class="form-control" id="alamat_lokasi" name="alamat_lokasi" value="<?= $lokasi['alamat_lokasi'] ?>">
                    <p class="text-danger"><?= validation_show_error('alamat_lokasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Fasilitas</label>
                    <input class="form-control" name="fasilitas" value="<?= $lokasi['fasilitas'] ?>">
                    <p class="text-danger"><?= validation_show_error('fasilitas') ?></p>
                </div>

                <div class="form-group">
                    <label>Aksesibilitas <span class="text-dark">(Tersedia Untuk Disabilitas)</span></label>
                    <input class="form-control" name="aksesibilitas" value="<?= $lokasi['aksesibilitas'] ?>">
                    <p class="text-danger"><?= validation_show_error('aksesibilitas') ?></p>
                </div>

                <div class="form-group">
                    <label>Transportasi Umum Terdekat</label>
                    <input class="form-control" name="transportasi" value="<?= $lokasi['transportasi'] ?>">
                    <p class="text-danger"><?= validation_show_error('transportasi') ?></p>
                </div>

                <div class="form-group">
                    <label>Nomor TLP BKM</label>
                    <input type="number" class="form-control" name="nomor_tlp_bkm" value="<?= $lokasi['nomor_tlp_bkm'] ?>">
                    <p class="text-danger"><?= validation_show_error('nomor_tlp_bkm') ?></p>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group">
                    <label>Luas Lahan</label>
                    <div class="d-flex align-items-center">
                        <input class="form-control me-2" name="luas_lahan" value="<?= $lokasi['luas_lahan'] ?>">
                        <span class="bg-light px-2">M<sup>2</sup></span>
                    </div>
                    <p class="text-danger"><?= validation_show_error('luas_lahan') ?></p>
                </div>

                <div class="form-group">
                    <label>Luas Area Parkir</label>
                    <div class="d-flex align-items-center">
                        <input class="form-control me-2" name="luas_parkir" value="<?= $lokasi['luas_parkir'] ?>">
                        <span class="bg-light px-2">M<sup>2</sup></span>
                    </div>
                    <p class="text-danger"><?= validation_show_error('luas_parkir') ?></p>
                </div>

                <div class="form-group">
                    <label>Luas Area Wudhu</label>
                    <div class="d-flex align-items-center">
                        <input class="form-control me-2" name="area_wudhu" value="<?= $lokasi['area_wudhu'] ?>">
                        <span class="bg-light px-2">M<sup>2</sup></span>
                    </div>
                    <p class="text-danger"><?= validation_show_error('area_wudhu') ?></p>
                </div>

                <div class="form-group">
                    <label>Kapasitas</label>
                    <div class="d-flex align-items-center">
                        <input type="number" class="form-control me-2" name="kapasitas" value="<?= $lokasi['kapasitas'] ?>">
                        <span class="bg-light px-2" style="font-size: 30px;">&plusb;</span>
                    </div>
                    <p class="text-danger"><?= validation_show_error('kapasitas') ?></p>
                </div>

                <div class="form-group">
                    <label>Latitude</label>
                    <input class="form-control" id="latitude" name="latitude" value="<?= $lokasi['latitude'] ?>">
                    <p class="text-danger"><?= validation_show_error('latitude') ?></p>
                </div>

                <div class="form-group">
                    <label>Longitude</label>
                    <input class="form-control" id="longitude" name="longitude" value="<?= $lokasi['longitude'] ?>">
                    <p class="text-danger"><?= validation_show_error('longitude') ?></p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-11 col-md-8 col-lg-11 card mb-3 text-center">
                    <div class="card-body">
                        <input type="file" class="form-control" name="foto_lokasi" accept="image/*">
                        <p class="text-danger"><?= isset($errors['foto_lokasi']) ? validation_show_error('foto_lokasi') : '' ?></p>
                        <img src="<?= base_url('foto/' . $lokasi['foto_lokasi']) ?>" width="200px" height="110px">
                    </div>
                </div>
            </div>

            <div class="d-inline-flex justify-content-around mb-2">
                <button type="submit" class="btn btn-primary">SIMPAN</button>
                <a href="<?= base_url('lokasi/index') ?>" class="btn btn-danger">Kembali</a>
            </div>
            <?= form_close() ?>
        </div>
    </div>
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

<hr class="mx-1">
<br>
<div class="col-sm-12">
    <div id="map" style="width: 100%; height: 100vh; border-radius:15px; box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;"></div>
</div>

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

    var latInput = document.querySelector("[name=latitude]");
    var lngInput = document.querySelector("[name=longitude]");
    var cLocation = [<?= $lokasi['latitude'] ?>, <?= $lokasi['longitude'] ?>];
    var marker = L.marker(cLocation, { draggable: true }).addTo(map);

    marker.on('dragend', function(e) {
        var lat = marker.getLatLng().lat.toFixed(8);
        var lng = marker.getLatLng().lng.toFixed(8);
        latInput.value = lat;
        lngInput.value = lng;
    });

    map.on("click", function(e) {
        var lat = e.latlng.lat.toFixed(8);
        var lng = e.latlng.lng.toFixed(8);
        latInput.value = lat;
        lngInput.value = lng;
        marker.setLatLng(e.latlng);
    });
</script>

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
