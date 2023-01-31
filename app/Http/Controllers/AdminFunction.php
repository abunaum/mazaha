<?php

namespace App\Http\Controllers;

use App\Models\gs;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminFunction extends Controller
{
    public function tambah_gs(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'jabatan' => 'required',
            'email' => 'required|email:rfc,dns|unique:users,email',
            'username' => 'required|unique:users,username',
            'password' => 'required',
            'role' => 'required',
        ]);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah data gagal!')->withErrors($validator)->withInput();
        }
        $user = [
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'is_active' => 1,
        ];
        $user = User::create($user);
        $gs = [
            'uid' => $user->id,
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'bidang_studi' => $request->bidang_studi,
            'no_hp' => $request->nohp,
        ];
        gs::create($gs);
        return back()->with('sukses', 'Tambah data berhasil!');
    }

    public function edit_gs(Request $request, User $uid)
    {
        $gsperson = gs::where('uid', $uid->id)->first();
        $idgs = $gsperson->id;

        $rules = [
            'nama' => 'required',
            'jabatan' => 'required',
            'role' => 'required',
        ];

        if ($request->email !== $uid->email) {
            $rules['email'] = 'required|email:rfc,dns|unique:users,email';
        }
        if ($request->username !== $uid->username) {
            $rules['username'] = 'required|unique:users,username';
        }

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah data gagal!')->withErrors($validator)->withInput();
        }

        $user = [
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'role' => $request->role,
        ];
        $gs = [
            'alamat' => $request->alamat,
            'jabatan' => $request->jabatan,
            'bidang_studi' => $request->bidang_studi,
            'no_hp' => $request->nohp,
        ];

        User::where('id', $uid->id)->update($user);
        gs::where('id', $idgs)->update($gs);
        return back()->with('sukses', 'Edit data berhasil!');
    }

    public function hapus_gs(User $uid)
    {
        $gsperson = gs::where('uid', $uid->id)->first();
        $idgs = $gsperson->id;
        gs::where('id', $idgs)->delete();
        $uid->delete();
        return back()->with('sukses', 'Hapus data berhasil!');
    }
}
