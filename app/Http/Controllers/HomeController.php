<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $data = [
            'pages' => 'home',
        ];
        return view('home', $data);
    }

    public function profile()
    {
        $data = [
            'pages' => 'profile',
        ];
        return view('profile', $data);
    }

    public function visi_misi()
    {
        $data = [
            'pages' => 'visi-misi',
        ];
        return view('visi-misi', $data);
    }

    public function staff_pengajar()
    {
        $data = [
            'pages' => 'staff-pengajar',
        ];
        return view('staff-pengajar', $data);
    }

    public function ppdb()
    {
        $data = [
            'pages' => 'ppdb',
        ];
        return view('ppdb', $data);
    }
}
