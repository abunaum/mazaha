<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class gs extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function scopeCari($query, array $filter)
    {
        $query->join('users', 'users.id', '=', 'gs.uid')
            ->join('profiles', 'profiles.uid', '=', 'gs.uid')
            ->select('users.*', 'gs.*', 'profiles.*')
            ->orderBy('users.name', 'asc');

        $query->when($filter['cari'] ?? null, function ($query, $cari) {
            $query->where('users.name', 'like', '%'.$cari.'%')
                ->orWhere('gs.jabatan', 'like', '%'.$cari.'%')
                ->orWhere('gs.bidang_studi', 'like', '%'.$cari.'%')
                ->orWhere('gs.no_hp', 'like', '%'.$cari.'%');
        });

        return $query;
    }

}
