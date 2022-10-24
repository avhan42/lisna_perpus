<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peminjam';
    protected $primaryKey       = 'id_peminjam';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_anggota','id_buku','tgl_pinjam','tgl_kembali'];


    public function getPeminjam(){
        $query = $this->db->table('peminjam')
        ->join('buku', 'peminjam.id_buku=buku.id_buku')
        ->get();
        return $query->getResultArray();
    }

    public function getPeminjamAll(){
        $query = $this->db->table('peminjam')
        ->join('anggota', 'peminjam.id_anggota=anggota.id_anggota')
        ->join('buku', 'peminjam.id_buku = buku.id_buku')
        ->get();
        return $query->getResultArray();
    }

    public function getSemua($id){
        $query = $this->db->query("SELECT * FROM `peminjam` INNER JOIN `anggota`,`buku` WHERE `peminjam`.`id_anggota`=`anggota`.`id_anggota` AND `peminjam`.`id_buku`=`buku`.`id_buku` AND `peminjam`.`id_peminjam`= $id");
        return $query->getResultArray();
    }
}
