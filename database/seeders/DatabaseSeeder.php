<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'Admin MA ZAHA 1',
            'username' => 'admin',
            'email' => 'ahmad.yani.ardath@gmail.com',
            'role' => 'admin',
            'is_active' => true,
            'password' => bcrypt('yaniardath!@#'),
        ]);

        User::create([
            'name' => 'User 1',
            'username' => 'user',
            'email' => 'userh@gmail.com',
            'role' => 'user',
            'is_active' => true,
            'password' => bcrypt('user'),
        ]);
    }
}
