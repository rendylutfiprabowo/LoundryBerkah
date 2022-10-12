<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Output;

class LoundryController extends BaseController
{
    public function index()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Home',
            'output' => $output
        ];

        return view('menu/home', $data);
    }



    public function riwayattransaksi()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Riwayat Transaksi',
            'output' => $output
        ];

        return view('pages/riwayattransaksi', $data);
    }

    public function pesanlayanan()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Pesan Layanan',
            'output' => $output
        ];
        return view('pages/pesanlayanan', $data);
    }

    public function paketlayanan()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Paket Layanan',
            'output' => $output
        ];
        return view('menu/paketlayanan', $data);
    
    }
    
    public function tentangkami()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Tentang Kami',
            'output' => $output
        ];
        return view('menu/tentangkami', $data);
    
    }
    
    public function layanantambahan()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Layanan Tambahan',
            'output' => $output
        ];
        return view('menu/layanantambahan', $data);
    
    }
    
    public function testimoni()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Testimoni',
            'output' => $output
        ];
        return view('menu/testimoni', $data);
    }

    public function hubungikami()
    {
        $outputModel = new Output();
        $output = $outputModel->findAll();
        $data = [
            'title' => 'Hubungi Kami',
            'output' => $output
        ];
        return view('menu/hubungikami', $data);
    
    }
}
