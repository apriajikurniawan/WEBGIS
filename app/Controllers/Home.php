<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        $data = [
            'judul' => 'Dashboard',
            'page'  => 'v_home',
            'nama'  =>  'APRIAJI KURNIAWAN'
        ];
        return view('v_template',$data);
    }

    public function koordinat(): string
    {
        $data = [
            'judul' => 'Titik Koordinat',
            'page'  => 'koordinat',
        ];
        return view('v_template',$data);
    }

    public function profil(): string
    {
        $data = [
            'judul' => 'My Profil',
            'page'  => 'profil',
            'nama'  =>  'APRIAJI KURNIAWAN'
        ];
        return view('v_template',$data);
    }
    
}
