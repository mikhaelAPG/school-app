<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'nama_sekolah' => 'SMAN 1',
            'alamat' => 'Jl.Imam Bonjol'
        ];
        return view('home', $data);
    }

    public function about($id)
    {
        return 'Ini Halaman About<br>' . $id;
    }
}
