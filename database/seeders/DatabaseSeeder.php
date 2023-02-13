<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\categories;
use App\Models\Profile;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\gs;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        User::create([
            'name' => 'Ahmad Yani',
            'username' => 'admin',
            'email' => 'ahmad.yani.ardath@gmail.com',
            'role' => 'admin',
            'is_active' => true,
            'password' => bcrypt('yaniardath!@#'),
        ]);

        Profile::create([
            'uid' => 1,
            'image' => null,
            'telegram' => null,
            'instagram' => null,
            'facebook' => null,
        ]);

        gs::create([
            'uid' => 1,
            'alamat' => 'Satreyan Maron',
            'jabatan' => 'Web Dev',
            'no_hp' => '081234567890',
            'bidang_studi' => '',
        ]);

        User::create([
            'name' => 'Najwan Nada',
            'username' => 'nada',
            'email' => 'najwannada@mazainulhasan.sch.id',
            'role' => 'media',
            'is_active' => true,
            'password' => bcrypt('nada123'),
        ]);

        Profile::create([
            'uid' => 2,
            'image' => null,
            'telegram' => null,
            'instagram' => null,
            'facebook' => null,
        ]);

        categories::create([
            'nama' => 'Berita',
        ]);
        categories::create([
            'nama' => 'Informasi',
        ]);
        categories::create([
            'nama' => 'Prestasi',
        ]);
    }
}
