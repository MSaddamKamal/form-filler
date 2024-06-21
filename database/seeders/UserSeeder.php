<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $colors = ['Blue', 'Green', 'Red'];

        for ($i = 1; $i <= 20; $i++) {
            User::create([
                'name' => "User $i",
                'favorite_color' => $colors[array_rand($colors)],
            ]);
        }
    }
}
