<?php

namespace App\Controllers;
use App\Models\ModelLokasi;

class Lokasi extends BaseController
{
    protected $ModelLokasi;

    public function __construct()
    {
        $this->ModelLokasi = new ModelLokasi();
    }

    public function index()
    {
        $data = [
            'judul' => 'Data Lokasi Masjid Wilayah Batubara',
            'page'  => 'lokasi/v_data_lokasi',
            'lokasi' => $this->ModelLokasi->getAllData()
        ];
        return view('v_template', $data);
    }

    public function inputlokasi()
    {
        $data = [
            'judul' => 'Input Lokasi Masjid',
            'page'  => 'lokasi/v_input_lokasi',
            'title' => 'Wilayah Batubara',
        ];
        return view('v_template', $data);
    }

    public function insertData()
    {
        if ($this->validate([
            'nama_lokasi' => [
                'label' => 'Nama Masjid',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'alamat_lokasi' => [
                'label' => 'Lokasi Masjid',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'fasilitas' => [
                'label' => 'Fasilitas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'aksesibilitas' => [
                'label' => 'Aksesibilitas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'transportasi' => [
                'label' => 'Transportasi Umum Terdekat',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'nomor_tlp_bkm' => [
                'label' => 'Nomor TLP BKM',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'luas_lahan' => [
                'label' => 'Luas Lahan',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'luas_parkir' => [
                'label' => 'Luas Parkir',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'area_wudhu' => [
                'label' => 'Area Wudhu',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'kapasitas' => [
                'label' => 'Kapasitas',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            
            'latitude' => [
                'label' => 'Latitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            'longitude' => [
                'label' => 'Longitude',
                'rules' => 'required',
                'errors' => [
                    'required' => '{field} Harus di isi.'
                ]
            ],
            
            'foto_lokasi' => [
                'label' => 'Foto',
                'rules' => 'uploaded[foto_lokasi]|max_size[foto_lokasi,1024]|mime_in[foto_lokasi,image/jpg,image/jpeg,image/png]',
                'errors' => [
                    'uploaded' => '{field} Tidak boleh kosong',
                    'max_size' => 'Ukuran {field} Maksimal 1024 KB',
                    'mime_in' => 'Format {field} Harus (jpg/jpeg/png)',
                ]
            ],


           
        ]))  {
            $foto_lokasi = $this->request->getFile('foto_lokasi');
            $nama_file_foto = $foto_lokasi->getRandomName();
            $foto_lokasi->move('foto', $nama_file_foto);

            
            $data = [
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
                'fasilitas' => $this->request->getPost('fasilitas'),
                'aksesibilitas' => $this->request->getPost('aksesibilitas'),
                'transportasi' => $this->request->getPost('transportasi'),
                'nomor_tlp_bkm' => $this->request->getPost('nomor_tlp_bkm'),
                'luas_lahan' => $this->request->getPost('luas_lahan'),
                'luas_parkir' => $this->request->getPost('luas_parkir'),
                'area_wudhu' => $this->request->getPost('area_wudhu'),
                'kapasitas' => $this->request->getPost('kapasitas'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'foto_lokasi' => $nama_file_foto,
            ];

            $this->ModelLokasi->insertData($data);
            session()->setFlashdata('pesan', 'Data Lokasi Berhasil Ditambahkan.');
            return redirect()->to('Lokasi/inputlokasi');
        } else {
            return redirect()->to('Lokasi/inputlokasi')->withInput();
        }
    }

    public function pemetaanLokasi()
    {
        $data = [
            'judul' => 'Pemetaan Lokasi Wilayah Batubara',
            'page'  => 'lokasi/v_pemetaan_lokasi',
            'lokasi' => $this->ModelLokasi->getAllData(),
        ];
        return view('v_template', $data);
    }

    public function editLokasi($id_lokasi)
    {
        $data = [
            'judul' => 'Edit Data Lokasi',
            'page'  => 'lokasi/v_edit_lokasi',
            'title' => 'Wilayah Batubara',
            'lokasi' => $this->ModelLokasi->getDataById($id_lokasi),
        ];
        return view('v_template', $data);
    }




    public function updateData($id_lokasi)
    {
        if ($this->validate([
            'nama_lokasi' => 'required',
            'alamat_lokasi' => 'required',
            'fasilitas' => 'required',
            'aksesibilitas' => 'required',
            'transportasi' => 'required',
            'nomor_tlp_bkm' => 'required',
            'luas_lahan' => 'required',
            'luas_parkir' => 'required',
            'area_wudhu' => 'required',
            'kapasitas' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'foto_lokasi' => 'max_size[foto_lokasi,1024]|mime_in[foto_lokasi,image/jpg,image/jpeg,image/png,image/webp]',
        ])) {
            $foto_lokasi = $this->request->getFile('foto_lokasi');
            

            $lokasi = $this->ModelLokasi->getDataById($id_lokasi);
            if ($foto_lokasi->getError() == 4) {
                $nama_file_foto = $lokasi['foto_lokasi'];
            } else {
                $nama_file_foto = $foto_lokasi->getRandomName();
                $foto_lokasi->move('foto', $nama_file_foto);
            }

            $data = [
                'id_lokasi' => $id_lokasi,
                'nama_lokasi' => $this->request->getPost('nama_lokasi'),
                'alamat_lokasi' => $this->request->getPost('alamat_lokasi'),
                'fasilitas' => $this->request->getPost('fasilitas'),
                'aksesibilitas' => $this->request->getPost('aksesibilitas'),
                'transportasi' => $this->request->getPost('transportasi'),
                'nomor_tlp_bkm' => $this->request->getPost('nomor_tlp_bkm'),
                'luas_lahan' => $this->request->getPost('luas_lahan'),
                'luas_parkir' => $this->request->getPost('luas_parkir'),
                'area_wudhu' => $this->request->getPost('area_wudhu'),
                'kapasitas' => $this->request->getPost('kapasitas'),
                'latitude' => $this->request->getPost('latitude'),
                'longitude' => $this->request->getPost('longitude'),
                'foto_lokasi' => $nama_file_foto,
            ];

            $this->ModelLokasi->updateData($data);
            session()->setFlashdata('pesan', 'DATA BERHASIL DIUPDATE.');
            return redirect()->to('Lokasi/index');
        } else {
            return redirect()->to('Lokasi/editlokasi/' . $id_lokasi)->withInput();
        }
    }




    public function deleteLokasi($id_lokasi) 
    {
        $data = [
            'id_lokasi' => $id_lokasi,
        ];

        $this->ModelLokasi->deleteData($data);
        session()->setFlashdata('pesan', 'Data Lokasi berhasil DIhapus');
        return redirect()->to('Lokasi/index');
    }

    public function cetak()
    {
    $data = [
        'lokasi' => $this->ModelLokasi->getAllData()
    ];

    return view('lokasi/cetak', $data);
    }


}
?>
