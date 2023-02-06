<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'judul'
            ]
        ];
    }

    public function scopeCari($query, array $filter)
    {
        $query->join('categories', 'categories.id', '=', 'posts.categori')
            ->join('users', 'users.id', '=', 'posts.author')
            ->select('posts.*', 'categories.nama as nama_kategori', 'users.name as nama_author');

        $query->when($filter['cari'] ?? null, function ($query, $cari) {
            $query->where('posts.judul', 'like', '%'.$cari.'%')
            ->orWhere('posts.body', 'like', '%'.$cari.'%')
            ->orWhere('categories.nama', 'like', '%'.$cari.'%')
            ->orWhere('users.name', 'like', '%'.$cari.'%');
        });

        $query->when($filter['author'] ?? null, function ($query, $author) {
            $query->where('users.name', $author);
        });

        $query->when($filter['kategori'] ?? null, function ($query, $kategori) {
            $query->where('categories.nama', $kategori);
        });

        return $query;
    }
}
