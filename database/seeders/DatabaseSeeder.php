<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\categories;
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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'Ahmad Yani',
            'username' => 'admin',
            'email' => 'ahmad.yani.ardath@gmail.com',
            'role' => 'admin',
            'is_active' => true,
            'password' => bcrypt('yaniardath!@#'),
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
