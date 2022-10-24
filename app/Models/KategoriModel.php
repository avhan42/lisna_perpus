<?php

namespace App\Models;
use App\Models\BukuModel;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'kategori';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_buku','kategori'];


    public function getFullBook(){
        $query = $this->db->table('kategori')
        ->join('buku', 'kategori.id_buku = buku.id_buku')
        ->get();
        return $query;
    }

    public function getKategoriId($id){
        $buku = new BukuModel();
        $buku->where('id_buku',$id);
        $query = $buku->get();
        return $query;
    }
}
