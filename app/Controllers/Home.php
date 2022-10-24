<?php

namespace App\Controllers;

use App\Models\AnggotaModel;
use App\Models\BukuModel;
use App\Models\KategoriModel;
use App\Models\PeminjamModel;

class Home extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        $kateg = new KategoriModel();
        $anggota = new AnggotaModel();
        $peminjam = new PeminjamModel();
        $data['buku'] = $buku->countAllResults();
        $data['kateg'] = $kateg->countAllResults();
        $data['peminjam'] = $peminjam->countAllResults();
        $data['kembali']   = $peminjam->where('tgl_kembali')->countAllResults();
        return view('dashboard',$data);
    }
}
