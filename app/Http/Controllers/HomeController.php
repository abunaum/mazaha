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
        return view('home',$data);
    }

    public function profile()
    {
        $data = [
            'pages' => 'profile',
        ];
        return view('profile',['pages' => 'profile']);
    }

    public function visi_misi()
    {
        $data = [
            'pages' => 'visi-misi',
        ];
        return view('visi-misi',['pages' => 'visi-misi']);
    }

    public function staff_pengajar()
    {
        $data = [
            'pages' => 'staff-pengajar',
        ];
        return view('staff-pengajar',['pages' => 'staff-pengajar']);
    }

    public function ppdb()
    {
        $data = [
            'pages' => 'ppdb',
        ];
        return view('ppdb',['pages' => 'ppdb']);
    }
}
