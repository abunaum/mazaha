<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function guru_staff()
    {
        $data = [
            'tab' => 'Data Person',
            'pages' => 'Guru & Staff',
        ];
        return view('panelpage.dashboard', $data);
    }

    public function siswa()
    {
        $data = [
            'tab' => 'Data Person',
            'pages' => 'Siswa',
        ];
        return view('panelpage.dashboard', $data);
    }

    public function kelas()
    {
        $data = [
            'tab' => 'Data KBM',
            'pages' => 'Kelas',
        ];
        return view('panelpage.dashboard', $data);
    }

    public function mapel()
    {
        $data = [
            'tab' => 'Data KBM',
            'pages' => 'Mapel',
        ];
        return view('panelpage.dashboard', $data);
    }
}
