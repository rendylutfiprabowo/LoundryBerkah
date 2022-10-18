<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\outputModel;

class LoundryController extends BaseController
{
    public function index()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Home',
            'output' => $output
        ];

        return view('menu/home', $data);
    }

    

    public function masuk()
    {
        $data = [
            'title' => 'Masuk'
        ];

        return view('pages/masuk', $data);
    }

    public function riwayattransaksi()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Riwayat Transaksi',
            'output' => $output
        ];

        return view('pages/riwayattransaksi', $data);
    }

    public function pesanlayanan()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Pesan Layanan',
            'output' => $output
        ];
        return view('pages/pesanlayanan', $data);
    }
}
