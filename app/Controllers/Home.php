<?php

namespace App\Controllers;

use App\Models\Output;
use App\Models\OutputModel;

class Home extends BaseController
{
    public function index()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Output',
            'output' => $output
        ];

        return view('/output', $data);
    }

    public function tambahdata()
    {
        $data = [
            'title' => 'Tambah Data'
        ];

        return view('/tambahdata', $data);
    }

    

    public function simpandata()
    {
        if (!$this->validate(
            [
                'tgl_pemasukan' => 'required',
                'jumlah_pemasukan' => 'required'
            ]
        )) {
            return redirect()->to('/tambahdata');
        }
        $output = new outputModel();

        $data = [
            'tgl_pemasukan' => $this->request->getPost('tgl_pemasukan'),
            'jumlah_pemasukan' => $this->request->getPost('jumlah_pemasukan')
        ];
        $output->save($data);

        return redirect()->to('/output');
    }

    // public function catatduit()
    // {
    //     $data=[
    //         'title'=> 'Catat Duit'
    //     ];
    //     return view('index');
    // }
}
