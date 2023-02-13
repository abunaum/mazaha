<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = file_get_contents("public/posts.json");
        $defile = json_decode($file, true);
        $data = $defile[0]['data'];
        foreach ($data as $d) {
            $newdata = [
                'categori' => $d['categori'],
                'author' => $d['author'],
                'judul' => $d['judul'],
                'slug' => $d['slug'],
                'excerpt' => $d['excerpt'],
                'body' => $d['body'],
                'gambar' => $d['gambar'],
                'created_at' => $d['created_at']
            ];
            Post::create($newdata);
        }

    }
}
