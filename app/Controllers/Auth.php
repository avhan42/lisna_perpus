<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\AnggotaModel;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {
        if(!session()->get('isLoggedIn')){
            return view('login');
        }else{
            if(session()->get('role') ==0){
                return redirect()->to('/front');
            }else{
                return redirect()->to('/');
            }
        }
    }

    public function proses(){
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $userModel->where('username',$username)->first();

        if($data){
            $pass = $data['password'];
            if($pass == $password){
                $ses_data = [
                    'id_user'   => $data['id_user'],
                    'username'  => $data['username'],
                    'role'      => $data['role'],
                    'isLoggedIn'=> TRUE
                ];
                $session->set($ses_data);
                    if($data['role'] > 0){
                        return redirect()->to('/');
                    }else{
                        return redirect()->to('/front');
                    }
            }else{
                return redirect()->to('login')->with('msg', 'Periksa Username atau Password Anda');

            }
        }else{
            // $session->setFlashdata('msg', 'Periksa Username atau Password Anda');
            return redirect()->to('login')->with('msg', 'Periksa Username atau Password Anda');
        }
    }

    public function registrasi(){
        return view('daftar');
    }

    public function proses_daftar(){
        $user = new UserModel();
        $anggota = new AnggotaModel();
        $username = $this->request->getPost('username');
        $umur = $this->request->getPost('umur');
        $alamat = $this->request->getPost('alamat');
        $password = $this->request->getPost('password');

        $user->insert([
            'username'  => $username,
            'password'  => $password,
            'role'      => 0
        ]);

        $anggota->insert([
            'nama'      => $username,
            'umur'      => $umur,
            'alamat'    => $alamat
        ]);

        return redirect()->to('/login')->with('msg', 'Akun Berhasil Di Buat Silahkan Login');
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}
