<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function guru_staff()
    {
        $gs = DB::table('gs')
            ->join('users', 'users.id', '=', 'uid')
            ->select('gs.*', 'users.*')
            ->get();
        $data = [
            'tab' => 'Data Person',
            'pages' => 'Guru & Staff',
            'gs' => $gs,
        ];
        return view('panelpage.admin.gs', $data);
    }

    public function edit_gs( Request $request, $uid)
    {
        $user = DB::table('gs')
            ->where('uid', $uid)
            ->join('users', 'users.id', '=', 'uid')
            ->select('users.*', 'gs.*')
            ->first();
        $data = [
            'tab' => 'Data Person',
            'pages' => 'Guru & Staff',
            'gs' => $user,
        ];
        return view('panelpage.admin.gs-edit', $data);
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
