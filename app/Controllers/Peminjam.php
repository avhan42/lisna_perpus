<?php

namespace App\Controllers;
use App\Models\PeminjamModel;
use App\Models\AnggotaModel;
use App\Models\BukuModel;

use App\Controllers\BaseController;

class Peminjam extends BaseController
{
    public function index()
    {
        $pinjam = new PeminjamModel();
        $data['pinjam'] = $pinjam->getPeminjamAll();
        return view('peminjam',$data);
    }

    public function tambah(){
        $anggota = new AnggotaModel();
        $buku = new BukuModel();
        $data['anggota'] = $anggota->findAll();
        $data['buku']   = $buku->findAll();
        return view('tambah_peminjam',$data);
    }

    public function proses(){
        $pinjam = new PeminjamModel();
        $pinjam->insert([
            'id_anggota'    => $this->request->getPost('nama'),
            'id_buku'       => $this->request->getPost('buku'),
            'tgl_pinjam'    => $this->request->getPost('pinjam'),
            'tgl_kembali'   => NULL
        ]);
        return redirect()->to('peminjam')->with('berhasil', 'Data Berhasil Di Simpan');
    }

    public function edit($id){
        $pinjam = new PeminjamModel();
        // $data['data'] = $pinjam->find($id);
        $data['pinjam']   = $pinjam->getSemua($id);
        // var_dump($data['data']);
       return view('edit_peminjam',$data);
    }

    public function edit_proses($id){
        $pinjam = new PeminjamModel();
        $pinjam->update($id, [
            'tgl_kembali'    => $this->request->getPost('kembali')
        ]);

        return redirect()->to('peminjam')->with('berhasil','Data Berhasil Di Edit');
    }

    public function delete($id){
        $pinjam = new PeminjamModel();
        $pinjam->where('id_peminjam', $id);
        $pinjam->delete();
        return redirect()->to('peminjam')->with('berhasil', 'Data Berhasil Di Hapus');
    }
}
