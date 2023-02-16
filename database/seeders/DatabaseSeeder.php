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
            'email' => 'najwannada@mazainulhasan1.sch.id',
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

        User::create([
            'name' => 'Admin Madrasah',
            'username' => 'admin2',
            'email' => 'alexsaif@yahoo.com',
            'role' => 'media',
            'is_active' => true,
            'password' => bcrypt('admin2123'),
        ]);

        Profile::create([
            'uid' => 3,
            'image' => null,
            'telegram' => null,
            'instagram' => null,
            'facebook' => null,
        ]);

        User::create([
            'name' => 'Muhammad Hendra',
            'username' => 'mhd',
            'email' => 'hendra_elhaza@ymail.com',
            'role' => 'media',
            'is_active' => true,
            'password' => bcrypt('mhd123'),
        ]);

        Profile::create([
            'uid' => 4,
            'image' => null,
            'telegram' => null,
            'instagram' => null,
            'facebook' => null,
        ]);

        User::create([
            'name' => 'Rio Bahtiar',
            'username' => 'bahtiar',
            'email' => 'riobahtiar@live.com',
            'role' => 'media',
            'is_active' => true,
            'password' => bcrypt('bahtiar123'),
        ]);

        Profile::create([
            'uid' => 5,
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
