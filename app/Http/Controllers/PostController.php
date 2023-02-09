<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdatePostRequest;
use App\Models\categories;
use App\Models\Post;
use Illuminate\Http\Request;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use Yaza\LaravelGoogleDriveStorage\Gdrive;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::latest()
            ->join('categories', 'categories.id', '=', 'posts.categori')
            ->join('users', 'users.id', '=', 'posts.author')
            ->select('posts.*', 'categories.nama as nama_kategori', 'users.name as nama_author')
            ->get();
        $data = [
            'tab' => 'Blog',
            'pages' => 'Semua Post',
            'ap' => $posts,
        ];
        return view('post.allpost', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            'tab' => 'Blog',
            'pages' => 'Tambah Post',
            'categories' => categories::all(),
        ];
        return view('post.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \App\Http\Requests\StorePostRequest $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $valid = [
            'judul' => 'required|max:255',
            'slug' => 'required|unique:posts|max:255',
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'body' => 'required',
            'time' => 'required',
        ];
        $validator = Validator::make($request->all(), $valid);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah post gagal!')->withErrors($validator)->withInput();
        }
        $excerpt = str_replace("&nbsp;", " ", Str::limit(strip_tags($request->body), 350, '...'));
        $post = [
            'categori' => $request->kategori,
            'author' => auth()->user()->id,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'excerpt' => $excerpt,
            'body' => $request->body,
            'created_at' => $request->time,
        ];


        if ($request->file('gambar')) {
            $filename = md5(date('Y-m-d H:i:s:u').'-'.$request->file('gambar')->getFilename());
            try {
                $pathandfile = 'gambar-post/'.$filename.'.jpg';
                Gdrive::put($pathandfile, $request->file('gambar'));
                $post['gambar'] = $pathandfile;
            } catch (\Throwable $th) {
                return back()->with('error', 'Post gagal ditambahkan! <br> '.'Gagal Upload ke Gdrive');
            }
        } else {
            $post['gambar'] = 'default-post.jpg';
        }
        Post::create($post);
        return back()->with('sukses', 'Post berhasil ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $postfull = Post::join('categories', 'categories.id', '=', 'posts.categori')
            ->join('users', 'users.id', '=', 'posts.author')
            ->select('posts.*', 'categories.nama as nama_kategori', 'users.name as nama_author')
            ->where('posts.id', $post->id)
            ->first();
        if (!$postfull) {
            return back()->with('error', 'Post tidak ditemukan!');
        }
        $data = [
            'tab' => 'Blog',
            'pages' => 'Edit Post',
            'categories' => categories::all(),
            'post' => $postfull,
        ];
        return view('post.edit', $data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \App\Http\Requests\UpdatePostRequest $request
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if (!$post) {
            return back()->with('error', 'Post tidak ditemukan!');
        }
        $idpost = $post->id;
        $gambarpost = $post->gambar;
        $slugpost = $post->slug;
        $valid = [
            'judul' => 'required|max:255',
            'kategori' => 'required',
            'gambar' => 'image|file|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'body' => 'required',
            'time' => 'required',
        ];
        if ($request->slug != $slugpost) {
            $valid['slug'] = 'required|unique:posts|max:255';
        }
        $validator = Validator::make($request->all(), $valid);

        if ($validator->fails()) {
            return back()->with('error', 'Tambah post gagal!')->withErrors($validator)->withInput();
        }
        $excerpt = str_replace("&nbsp;", " ", Str::limit(strip_tags($request->body), 350, '...'));
        $post = [
            'categori' => $request->kategori,
            'author' => auth()->user()->id,
            'judul' => $request->judul,
            'slug' => $request->slug,
            'excerpt' => $excerpt,
            'body' => $request->body,
            'created_at' => $request->time,
        ];


        if ($request->file('gambar')) {
            $filename = md5(date('Y-m-d H:i:s:u').'-'.$request->file('gambar')->getFilename());
            if ($gambarpost != 'default-post.jpg') {
                try {
                    Gdrive::delete($gambarpost);
                    $pathandfile = 'gambar-post/'.$filename.'.jpg';
                    Gdrive::put($pathandfile, $request->file('gambar'));
                    $post['gambar'] = $pathandfile;
                } catch (\Throwable $th) {
                    return back()->with('error', 'Post gagal ditambahkan! <br> '.'Gagal Hapus Gambar Lama');
                }
            } else {
                try {
                    $pathandfile = 'gambar-post/'.$filename.'.jpg';
                    Gdrive::put($pathandfile, $request->file('gambar'));
                    $post['gambar'] = $pathandfile;
                } catch (\Throwable $th) {
                    return back()->with('error', 'Post gagal ditambahkan! <br> '.'Gagal Upload ke Gdrive');
                }
            }
        } else {
            $post['gambar'] = 'default-post.jpg';
        }
        Post::where('id', $idpost)->update($post);
        return back()->with('sukses', 'Post berhasil di edit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Post $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (!$post) {
            return back()->with('error', 'Post tidak ditemukan!');
        }
        $image = $post->gambar;
        if ($image != 'default-post.jpg'){
            Gdrive::delete($image);
        }
        Post::destroy($post->id);
        return back()->with('sukses', 'Post berhasil dihapus!');
    }

    public function checkSlug(Request $request)
    {
        $slug = SlugService::createSlug(Post::class, 'slug', $request->judul);
        return response()->json(['slug' => $slug]);
    }
}
