<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\outputModel;
use App\Models\userModel;

class RegisterController extends BaseController
{

    public function daftarakun()
    {
        $data = [
            'title' => 'Daftar'
        ];

        return view('pages/daftar', $data);
    }


    public function buatakun()
    {
        if (!$this->validate([
            'email' =>
            [
                'rules' => 'required|min_length[5]|is_unique[user.username]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 5 Karakter',
                    'max_length' => '{field} Maksimal 20 Karakter',
                    'is_unique' => 'Username sudah digunakan sebelumnya'
                ]
            ],
            'namalengkap' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 5 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter'
                ]
            ],
            'username' => [
                'rules' => 'required|min_length[5]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 5 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter'
                ]
            ],
            'password' => [
                'rules' => 'required|min_length[4]|max_length[50]',
                'errors' => [
                    'required' => '{field} Harus diisi',
                    'min_length' => '{field} Minimal 4 Karakter',
                    'max_length' => '{field} Maksimal 50 Karakter',
                ]
            ],
            'passwordkonfirmasi' => [
                'rules' => 'matches[password]',
                'errors' => [
                    'matches' => 'Konfirmasi Password tidak sesuai dengan password',
                ]
            ]
        ])) {
            session()->setFlashdata('error', $this->validator->listErrors());
            return redirect()->back()->withInput();
        }
        $users = new userModel();
        $users->insert([
            'email' => $this->request->getVar('email'),
            'namalengkap' => $this->request->getVar('namalengkap'),
            'username' => $this->request->getVar('username'),
            'password' => password_hash($this->request->getVar('password'), PASSWORD_BCRYPT)
        ]);
        return redirect()->to('/masuk');
    }
}
