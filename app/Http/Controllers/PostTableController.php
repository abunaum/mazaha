<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PostTableController extends Controller
{
    public function backup()
    {
        $posts = Post::latest()
            ->get();
        $postnya = [];
        foreach ($posts as $post) {
            $newpost = [
                'categori' => $post['categori'],
                'author' => $post['author'],
                'judul' => $post['judul'],
                'slug' => $post['slug'],
                'excerpt' => $post['excerpt'],
                'body' => $post['body'],
                'gambar' => $post['gambar'],
                'created_at' => $post['created_at']
            ];
            array_push($postnya, $newpost);
        }
        $fixpost = ['datapost' => $postnya];
        $jsonpost = json_encode($fixpost);
        return response($jsonpost, 200, [
            'Content-Disposition' => 'attachment; filename="post-' . time() . '.json"'
        ]);

    }

    public function restore(Request $request)
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
        $arrdata =  json_decode($data, true);

        $getdata = $arrdata['datapost'] ?? null;
        if ($getdata){
            Post::truncate();
            foreach ($getdata as $dp) {
                try {
                    Post::create($dp);
                } catch (\Exception $e) {
                    return back()->with('error', 'Restore post gagal! <br> File backup corrupt');
                }
            }
        } else {
            return back()->with('error', 'Restore post gagal! <br> File backup tidak sesuai');
        }
        return back()->with('sukses', 'Restore post berhasil!');
    }
}
