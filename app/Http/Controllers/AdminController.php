<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function guru_staff()
    {
        $gs = DB::table('gs')
            ->join('users', 'users.id', '=', 'uid')
            ->select('users.*', 'gs.*')
            ->get();
//        dd($gs);
        $data = [
            'tab' => 'Data Person',
            'pages' => 'Guru & Staff',
            'gs' => $gs,
        ];
        return view('panelpage.admin.gs', $data);
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
