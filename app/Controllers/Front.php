<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\BukuModel;
use App\Models\PeminjamModel;

class Front extends BaseController
{
    public function index()
    {
        $buku = new BukuModel();
        $pinjam = new PeminjamModel();
        $data['buku'] = $buku->findAll();
        $id = session()->get('id_user');
        $data['pinjam'] = $pinjam->temukan($id);
        return view('front', $data);
    }

    public function proses(){
        $pinjam = new PeminjamModel();
        $sekarang = date('Y-m-d');
        $id         = $this->request->getPost('id');
        $id_anggota = session()->get('id_user');
        // $anggota    = $this->request->getPost('anggota');
        $pinjam->insert([
            'id_user'   => $id_anggota,
            'id_buku'   => $id,
            'tgl_pinjam'=>$sekarang
        ]);
        return redirect()->to('front')->with('msg', 'Buku Berhasil di Pinjam');
    }
}
