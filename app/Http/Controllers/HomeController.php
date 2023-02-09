<?php

namespace App\Http\Controllers;

use App\Models\gs;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

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
        $gs = gs::cari(request(['cari']))
            ->paginate(10)
            ->withQueryString();
        $data = [
            'pages' => 'staff-pengajar',
            'gs' => $gs,
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

    public function berita()
    {
        $posts = Post::latest()
            ->cari(request(['cari', 'kategori', 'author']))
            ->paginate(7)
            ->withQueryString();
        $data = [
            'pages' => 'berita',
            'posts' => $posts,
        ];
        return view('berita', $data);
    }

    public function berita_detail($slug)
    {
        $posts = Post::join('categories', 'categories.id', '=', 'posts.categori')
            ->join('users', 'users.id', '=', 'posts.author')
            ->select('posts.*', 'categories.nama as nama_kategori', 'users.name as nama_author')
            ->where('posts.slug', $slug)
            ->first();
        if (!$posts){
            return abort(404);
        }
        $data = [
            'pages' => 'berita',
            'posts' => $posts,
        ];
        return view('berita-detail', $data);
    }
    public function view_image(Request $request)
    {
        $request->query('location');
        if (!empty($request->query('location'))){
            $lokasi = $request->query('location');
            $gambar = Gdrive::get($lokasi);
            if ($gambar->file == null){
                return abort(404);
            } else {
                return response($gambar->file, 200)->header('Content-Type', $gambar->ext);
            }
        } else {
            return abort(404);
        }
    }

    public function pesan(Request $request)
    {
        $valid = [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required',
        ];
        $validator = Validator::make($request->all(), $valid);
        if ($validator->fails()) {
            return back()->with('error', 'Pesan gagal dikirim!')->withErrors($validator)->withInput();
        }
        return back()->with('sukses', 'Pesan berhasil dikirim!');
    }
}
