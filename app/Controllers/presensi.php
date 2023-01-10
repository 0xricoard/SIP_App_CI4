<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Presensi extends Controller
{
    public function index(){
    $this->absen('21.240.0058','Lutfi Lugowo');
    }
    private function absen($nim,$nama){
        $data['data'] = [$nim,$nama];
        $data['title'] = "Presensi";
        echo view('presensi_view', $data);
    }
}