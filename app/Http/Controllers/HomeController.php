<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $gs = DB::table('gs')
            ->join('users', 'users.id', '=', 'uid')
            ->select('users.*', 'gs.*')
            ->get();
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
        $data = [
            'pages' => 'berita',
            'posts' => $posts,
        ];
        return view('berita-detail', $data);
    }
}
