<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('home');
    }
    
public function mahasiswa()
{
    return view('mahasiswa', [
        'nama' => 'Muhammad Aziz Fadli Romadhon',
        'nim'  => '202457201043'
    ]);
}

    public function dosen()
    {
        return view('dosen');
    }

    public function matakuliah()
    {
        return view('matakuliah/index');
    }

    public function tentang()
    {
        return view('tentang');
    }

}
