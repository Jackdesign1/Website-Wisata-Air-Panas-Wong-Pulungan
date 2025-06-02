<?php

namespace Database\Seeders;

use App\Models\Tour;
use App\Models\User;
use App\Models\Vendor;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'level' => 1,
            'password' => Hash::make('password')
        ]);

        User::factory(10)->create()->each(function($user) {
            Vendor::factory()->create([
                'user_id' => $user->id
            ]);
        });

        Tour::factory(5)->create();
    }
}
