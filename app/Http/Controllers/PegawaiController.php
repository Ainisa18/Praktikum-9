<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class AdminController extends Controller
{
    public function pegawai()
    {
        $data_layout = [
            'title' => 'Kelola Pegawai',
        ];
        View::share($data_layout);

        return view('admin.pasien.index');
    }
}
