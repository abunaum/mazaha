<?php

namespace App\Http\Controllers;

use App\Models\gs;
use App\Models\Profile;
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

    public function backup_gs()
    {
        $gs = gs::join('users', 'users.id', '=', 'gs.uid')
            ->join('profiles', 'profiles.uid', '=', 'gs.uid')
            ->select('users.*', 'gs.*', 'profiles.*')
            ->get();
        $gsnya = [];
        foreach ($gs as $g) {
            if ($g['role'] == 'guru') {
                array_push($gsnya, $g);
            }
        }
        $fixgs = ['datags' => $gsnya];
        $jsongs = json_encode($fixgs);
        return response($jsongs, 200, [
            'Content-Disposition' => 'attachment; filename="gs-' . time() . '.json"'
        ]);
    }

    public function restore_gs(Request $request)
    {
        $valid = [
            'filejson' => 'required|file|max:2048000|mimetypes:application/json,text/plaint',
        ];
        $message = [
            'filejson.required' => 'File restore wajib ada.',
            'filejson.file' => 'File yang di upload bukan file yang benar.',
            'filejson.max' => 'Ukuran File maksimal 2 GB.',
            'filejson.mimetypes' => 'Ekstensi file yang di izinkan adalah json.',
        ];
        $validator = Validator::make($request->all(), $valid, $message);

        if ($validator->fails()) {
            return back()->with('error', 'Restore post gagal!')->withErrors($validator)->withInput();
        }
        $data = file_get_contents($request->filejson);
        $arrdata = json_decode($data, true);

        $getdata = $arrdata['datags'] ?? null;
        if ($getdata) {
            $gs = gs::join('users', 'users.id', '=', 'gs.uid')
                ->join('profiles', 'profiles.uid', '=', 'gs.uid')
                ->select('users.*', 'gs.*', 'profiles.*')
                ->where('users.role', 'guru')
                ->get();
            if ($gs) {
                foreach ($gs as $g) {
                    User::destroy($g->uid);
                }
            }
            foreach ($getdata as $dp) {
                try {
                    $datauser = [
                        'name' => $dp['name'],
                        'username' => $dp['username'],
                        'email' => $dp['email'],
                        'password' => $dp['password'],
                        'role' => 'guru',
                        'is_active' => 1,
                    ];
                    $user = User::create($datauser);
                    $datags = [
                        'uid' => $user->id,
                        'alamat' => $dp['alamat'],
                        'jabatan' => $dp['jabatan'],
                        'bidang_studi' => $dp['bidang_studi'],
                        'no_hp' => $dp['no_hp'],
                    ];
                    $profile = [
                        'uid' => $user->id,
                        'image' => null,
                        'telegram' => null,
                        'instagram' => null,
                        'facebook' => null,
                    ];
                    gs::create($datags);
                    Profile::create($profile);
                } catch (\Exception $e) {
                    return back()->with('error', 'Restore Guru dan Staff gagal! <br> File backup corrupt');
                }
            }
        } else {
            return back()->with('error', 'Restore Guru dan Staff gagal! <br> File backup tidak sesuai');
        }
        return back()->with('sukses', 'Restore Guru dan Staff berhasil!');
    }
}
