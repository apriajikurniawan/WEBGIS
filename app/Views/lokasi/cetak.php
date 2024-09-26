<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
<link href="../sb-admin/css/styles.css" rel="stylesheet" />
<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
            <h2 class="text-center">DATA LOKASI MASJID WILAYAH BATUBARA</h2>
        
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table id="datatablesSimple" class="table table-bordered border">
                <thead>
                    <tr>
                        <th>NO</th>
                        <th>NAMA MASJID</th>
                        <th>ALAMAT</th>
                        <th>FASILITAS</th>
                        <th>AKSESIBILITAS</th>
                        <th>TRANSPORTASI</th>
                        <th>NOMOR TLP BKM</th>
                        <th>LUAS LAHAN</th>
                        <th>LUAS PARKIR</th>
                        <th>AREA WUDHU</th>
                        <th>KAPASITAS</th>
                        <th>LATITUDE</th>
                        <th>LONGITUDE</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php foreach ($lokasi as $key => $value) { ?>
                        <tr>
                            <td><?= $no++ ?></td>
                            <td><?= htmlspecialchars($value['nama_lokasi']) ?></td>
                            <td><?= htmlspecialchars($value['alamat_lokasi']) ?></td>
                            <td><?= htmlspecialchars($value['fasilitas']) ?></td>
                            <td><?= htmlspecialchars($value['aksesibilitas']) ?></td>
                            <td><?= htmlspecialchars($value['transportasi']) ?></td>
                            <td><?= htmlspecialchars($value['nomor_tlp_bkm']) ?></td>
                            <td><?= htmlspecialchars($value['luas_lahan']) ?></td>
                            <td><?= htmlspecialchars($value['luas_parkir']) ?></td>
                            <td><?= htmlspecialchars($value['area_wudhu']) ?></td>
                            <td><?= htmlspecialchars($value['kapasitas']) ?></td>
                            <td><?= htmlspecialchars($value['latitude']) ?></td>
                            <td><?= htmlspecialchars($value['longitude']) ?></td>
                          
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../sb-admin/js/scripts.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        new simpleDatatables.DataTable('#datatablesSimple', {
            buttons: [
                { extend: 'copy', className: 'btn btn-primary' },
                { extend: 'csv', className: 'btn btn-primary' },
                { extend: 'excel', className: 'btn btn-primary' },
                { extend: 'print', className: 'btn btn-primary' }
            ]
        });

        <?php if (session()->getFlashdata('pesan')) { ?>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?= session()->getFlashdata('pesan') ?>'
            });
        <?php } ?>
    });

    window.print();
</script>









