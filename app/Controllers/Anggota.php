<?php

namespace App\Controllers;
use App\Models\AnggotaModel;

use App\Controllers\BaseController;

class Anggota extends BaseController
{
    public function index()
    {
        $anggota = new AnggotaModel();
        $data['anggota'] = $anggota->findAll();
        return view('anggota',$data);
    }

    public function tambah(){
        return view('tambah_anggota');
    }

    public function proses(){
        $anggota = new AnggotaModel();
        $anggota->insert([
            'nama'      => $this->request->getPost('nama'),
            'umur'      => $this->request->getPost('umur'),
            'alamat'      => $this->request->getPost('alamat'),
        ]);
        return redirect()->to('anggota')->with('berhasil','Data Berhasil Di Simpan');
    }

    public function edit($id){
        $anggota = new AnggotaModel();
        $data['data'] = $anggota->find($id);
        return view('edit_anggota',$data);
    }

    public function edit_proses($id){
        $anggota = new AnggotaModel();
        $anggota->update($id, [
            'nama'      => $this->request->getPost('nama'),
            'umur'      => $this->request->getPost('umur'),
            'alamat'    => $this->request->getPost('alamat')
        ]);
        return redirect()->to('anggota')->with('berhasil','Data Berhasil Di Update');
    }

    public function delete($id){
        $anggota = new AnggotaModel();
        $anggota->where('id_anggota',$id);
        $anggota->delete();
        return redirect()->to('anggota')->with('berhasil','Data Berhasil Di Hapus');
    }
}
