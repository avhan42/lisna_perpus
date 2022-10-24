<?php

namespace App\Models;

use CodeIgniter\Model;

class BukuModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'buku';
    protected $primaryKey       = 'id_buku';
    protected $useAutoIncrement = true;
    protected $allowedFields    = ['judul','penulis','gambar'];

    
}
