<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::join('profiles', 'profiles.uid', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();
        $data = [
            'pages' => 'Profile',
            'user' => $user,
        ];
        return view('panelpage.profile', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $jenis)
    {
        $user = User::join('profiles', 'profiles.uid', '=', 'users.id')
            ->where('users.id', auth()->user()->id)
            ->first();
        if ($jenis === 'password') {
            $valid = [
                'passwordbaru' => 'required|min:8',
                'ulangipassword' => 'required|same:passwordbaru'
            ];
            $message = [
                'passwordbaru.required' => 'Password Baru wajib di isi.',
                'passwordbaru.min' => 'Password Baru minimal 8 karakter.',
                'ulangipassword.required' => 'Ulangi Password wajib di isi',
                'ulangipassword.same' => 'Password Baru tidak sama dengan Ulangi Password',
            ];
            $validator = Validator::make($request->all(), $valid, $message);
            if ($validator->fails()) {
                return back()->with('error', 'Ubah password gagal!')->withErrors($validator)->withInput();
            }
            User::where('id', auth()->user()->id)->update([
                'password' => bcrypt($request->passwordbaru)
            ]);
            return back()->with('sukses', 'Password di edit!');
        } elseif ($jenis === 'profile') {
            $valid = [
                'nama' => 'required|max:255',
                'username' => 'required|max:255',
                'gambar' => 'image|file|max:2048|mimes:jpeg,png,jpg,gif,svg'
            ];
            $message = [
                'nama.required' => 'Nama wajib di isi.',
                'nama.max' => 'Nama maksimal 255 karakter.',
                'username.required' => 'Username wajib di isi.',
                'username.max' => 'Username maksimal 255 karakter.',
                'gambar.image' => 'File yang di upload bukan gambar.',
                'gambar.file' => 'File yang di upload bukan gambar.',
                'gambar.max' => 'Ukuran gambar maksimal 2 MB.',
                'gambar.mimes' => 'Ekstensi gambar yang di izinkan adalah jpeg, png, jpg, gif, svg.',
            ];

            if ($request->username !== $user->username) {
                $valid['username'] = 'required|max:255|unique:users';
                $message['username.unique'] = 'Username sudah terdaftar.';
            }

            $validator = Validator::make($request->all(), $valid, $message);

            if ($validator->fails()) {
                return back()->with('error', 'Ubah profile gagal!')->withErrors($validator)->withInput();
            }

            $datauser = [
                'name' => $request->nama,
                'username' => $request->username,
            ];
            $dataprofile = [
                'telegram' => $request->telegram,
                'facebook' => $request->facebook,
                'instagram' => $request->instagram,
            ];
            if ($request->file('gambar')) {
                $filename = md5(date('Y-m-d H:i:s:u') . '-' . $request->file('gambar')->getFilename());
                if ($user->image !== null) {
                    try {
                        Gdrive::delete($user->image);
                        $pathandfile = 'gambar-user/' . $filename . '.jpg';
                        Gdrive::put($pathandfile, $request->file('gambar'));
                        $dataprofile['image'] = $pathandfile;
                    } catch (\Throwable $th) {
                        return back()->with('error', 'Post gagal ditambahkan! <br> ' . 'Gagal Hapus Gambar Lama');
                    }
                } else {
                    try {
                        $pathandfile = 'gambar-user/' . $filename . '.jpg';
                        Gdrive::put($pathandfile, $request->file('gambar'));
                        $dataprofile['image'] = $pathandfile;
                    } catch (\Throwable $th) {
                        return back()->with('error', 'Post gagal ditambahkan! <br> ' . 'Gagal Upload ke Gdrive');
                    }
                }
            }
            User::where('id', auth()->user()->id)->update($datauser);
            Profile::where('uid', auth()->user()->id)->update($dataprofile);

            return back()->with('sukses', 'Profile di edit!');
        } else {
            return back()->with('error', 'Perintah tidak dikenali!');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
