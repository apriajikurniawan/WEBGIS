<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelLokasi extends Model
{
    protected $table = 'tbl_lokasi';
    protected $allowedFields = ['nama_lokasi', 'alamat_lokasi', 'fasilitas', 'aksesibilitas', 'transportasi', 'nomor_tlp_bkm', 'luas_lahan', 'luas_parkir', 'area_wudhu', 'kapasitas', 'latitude', 'longitude', 'foto_lokasi'];

    public function insertData($data)
    {
        return $this->insert($data);
    }

    // public function getAllData()
    // {
    //     return $this->findAll();
    // }
    public function getAllData()
    {
        return $this->db->table('tbl_lokasi')
        ->get()->getResultArray();
    }
    public function getDataById($id_lokasi)
    {
        return $this->db->table('tbl_lokasi')
        ->where('id_lokasi', $id_lokasi)
        ->get()->getRowArray();
    }


    public function updateData($data)
    {
        $this->db->table('tbl_lokasi')
        ->where('id_lokasi' ,$data['id_lokasi'])
        ->update($data);
    }


    public function deleteData($data)
    {
        $this->db->table('tbl_lokasi')
        ->where('id_lokasi' ,$data['id_lokasi'])
        ->delete($data);
    }
}

?>