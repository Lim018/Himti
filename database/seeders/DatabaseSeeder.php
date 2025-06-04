<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Hash;
use Illuminate\Database\Seeder;
use OpenAdmin\Admin\Admin;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]); */

        User::create([
            'name' => 'user',
            'email' => 'user@email.co',
            'password' => Hash::make('12345678')
        ]);

        User::create([
            'name' => 'user1',
            'email' => 'user1@email.co',
            'password' => Hash::make('12345678')
        ]);

        $this->call([
            DepartmentSeeder::class,
            NewsSeeder::class, 
        ]);

    }
}
