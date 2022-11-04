<?php

namespace App\Controllers;
use App\Models\BukuModel;

use App\Controllers\BaseController;

use function PHPUnit\Framework\fileExists;

class BukuController extends BaseController
{

    public function index()
    {
        $buku = new BukuModel();

        $data['buku'] = $buku->findAll();
        // var_dump($data);
        return view('data_buku',$data);
    }

    public function tambah(){
        return view('tambah_buku');
    }
    public function tambah_proses(){
        $buku = new BukuModel();
        $judul = $this->request->getPost('judul');
        $penulis = $this->request->getPost('penulis');
        $img = $this->request->getFile('gambar');
        $fileName = $img->getName();
        if($fileName != NULL){
            if($img->isValid()){
                $buku->insert([
                    'judul'     => $judul,
                    'penulis'   => $penulis,
                    'gambar'    => $fileName
                ]);
                $img->move(ROOTPATH.'public/uploads/',$fileName);

                return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Simpan');
            }
        }else{
            $buku->insert([
                'judul'     => $judul,
                'penulis'   => $penulis,
                'gambar'    => ''
            ]);
            return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Simpan');

        }

    }

    public function edit($id){
        $buku = new BukuModel();
        $data['buku'] = $buku->find($id);
        // var_dump($data);
        return view('edit_buku',$data);
    }

    public function edit_proses($id){
        $buku = new BukuModel();
        $data['buku'] = $buku->where('id_buku', $id)->first();
        $img = $this->request->getFile('gambar');
        $namaGambar = $img->getName();
        $nama = $data['buku']['gambar'];
        if($namaGambar != NULL){
            $buku->update($id,[
                'judul'     => $this->request->getPost('judul'),
                'penulis'   => $this->request->getPost('penulis'),
                'gambar'    => $namaGambar    
            ]);
            if($nama != NULL){

                if(fileExists("uploads/".$nama)){
                    unlink("uploads/".$nama);
                    $img->move(ROOTPATH.'public/uploads/',$namaGambar);
                }
            }else{
                $img->move(ROOTPATH.'public/uploads/',$namaGambar);
            }
            
            return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Update');
        }else{
            $buku->update($id,[
                'judul'     => $this->request->getPost('judul'),
                'penulis'   => $this->request->getPost('penulis'),
                'gambar'    => ''
            ]);
            return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Update');

        }
    }

    public function delete($id){
        $buku = new BukuModel();
        $data = $buku->find($id);
        $nama = $data['gambar'];
        if($nama != NULL){
            if(fileExists("uploads/".$nama)){
                unlink("uploads/".$nama);
            }
            $buku->where('id_buku', $id);
            $buku->delete();
            return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Hapus');
        }else{
            $buku->where('id_buku', $id);
            $buku->delete();
            return redirect()->to('buku')->with('berhasil', 'Data Berhasil Di Hapus');
        }
    }
}
