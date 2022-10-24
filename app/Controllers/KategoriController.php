<?php

namespace App\Controllers;
use App\Models\KategoriModel;
use App\Models\BukuModel;

use App\Controllers\BaseController;

class KategoriController extends BaseController
{
    public function index()
    {
        $kateg = new KategoriModel();
        // $data['kateg'] = $kateg->findAll();
        $data['kateg'] = $kateg->getFullBook()->getResultArray();
        return view('kategori',$data);
    }

    public function tambah(){
        $buku = new BukuModel();
        $data['buku'] = $buku->findAll();
        return view('tambah_kategori',$data);
    }

    public function proses(){
        $kateg = new KategoriModel();
        $kateg->insert([
            'id_buku'   => $this->request->getPost('buku'),
            'kategori'  => $this->request->getPost('kateg')
        ]);
        return redirect()->to('kategori')->with('berhasil','Data Berhasil Di Tambahkan');
    }

    public function edit($id){
        $buku = new BukuModel();
        $kateg = new KategoriModel();
        $data['buku'] = $buku->findAll();
        $data['kateg'] = $kateg->find($id);
        $kat = $kateg->find($id);
        $id_buku = $kat['id_buku'];
        $data['kat'] = $kateg->getKategoriId($id_buku)->getResultArray();
       
        return view('edit_kategori',$data);
    }

    public function edit_proses($id){
        // var_dump($id);
        $kateg = new KategoriModel();
        $kateg->update($id,[
            'id_buku'   => $this->request->getPost('buku'),
            'kategori'  => $this->request->getPost('kateg')
        ]);
        return redirect()->to('kategori')->with('berhasil','Data Berhasil Di Update');

    }

    public function delete($id){
        $kateg = new KategoriModel();
        $kateg->where('id',$id);
        $kateg->delete();
        return redirect()->to('kategori')->with('berhasil','Data Berhasil Di Hapus');
    }
}
