<?php

namespace App\Models;

use CodeIgniter\Model;

class PeminjamModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'peminjam';
    protected $primaryKey       = 'id_peminjam';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['id_user','id_buku','tgl_pinjam','tgl_kembali'];


    public function getPeminjam(){
        $query = $this->db->table('peminjam')
        ->join('buku', 'peminjam.id_buku=buku.id_buku')
        ->get();
        return $query->getResultArray();
    }

    public function getPeminjamAll(){
        $query = $this->db->table('peminjam')
        ->join('anggota', 'peminjam.id_user=user.id_user')
        ->join('buku', 'peminjam.id_buku = buku.id_buku')
        ->get();
        return $query->getResultArray();
    }

    public function getSemua($id){
        $query = $this->db->query("SELECT * FROM `peminjam` INNER JOIN `user`,`buku` WHERE `peminjam`.`id_user`=`user`.`id_user` AND `peminjam`.`id_buku`=`buku`.`id_buku` AND `peminjam`.`id_peminjam`= $id");
        return $query->getResultArray();
    }

    public function temukan($id){
        $query = $this->db->table('peminjam')
        ->where('id_user', $id)
        ->get();
        return $query->getResultArray();
    }
}
