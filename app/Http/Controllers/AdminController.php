<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function index()
    {

        $data_layout = [
            'title' => 'Halaman Admin',
        ];
        View::share($data_layout);

        return view('admin.index', ['username'=> 'Ainisa Iskandar']);
    }

    public function pasien()
    {
        $data_layout = [
            'title' => 'Kelola Pasien',
        ];
        View::share($data_layout);

        return view('admin.pasien.index');
    }

    public function pegawai()
    {
        $data_layout = [
            'title' => 'Kelola Pegawai',
        ];
        View::share($data_layout);

        return view('admin.pegawai.index');
    }
}
