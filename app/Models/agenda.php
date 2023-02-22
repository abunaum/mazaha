<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    use HasFactory;

    use Sluggable;

    protected $guarded = ['id'];

    protected $table = 'agenda';

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
        $query->when($filter['cari'] ?? null, function ($query, $cari) {
            $query->where('agenda.judul', 'like', '%' . $cari . '%')
                ->orWhere('agenda.body', 'like', '%' . $cari . '%')
                ->orWhere('agenda.tempat', 'like', '%' . $cari . '%');
            return $query;
        });
    }
}
