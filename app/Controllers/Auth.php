<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\UserModel;

class Auth extends BaseController
{
    public function index()
    {

        return view('login');
    }

    public function proses(){
        $session = session();
        $userModel = new UserModel();
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        $data = $userModel->where('username',$username)->first();

        if($data){
            $pass = $data['password'];
            $ses_data = [
                'id_user'   => $data['id_user'],
                'username'  => $data['username'],
                'role'      => $data['role'],
                'isLoggedIn'=> TRUE
            ];
            $session->set($ses_data);
            return redirect()->to('/');
        }else{
            // $session->setFlashdata('msg', 'Periksa Username atau Password Anda');
            return redirect()->to('login')->with('msg', 'Periksa Username atau Password Anda');
        }
    }

    public function logout(){
        $session = session();
        $session->destroy();
        return redirect()->to('login');
    }
}
